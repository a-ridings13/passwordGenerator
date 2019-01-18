<?php

/* Simple Password Generator
 *
 */

const C_MIN = 33;  // use ASCCI Valuse from 33
const C_MAX = 126; // to 126
const PASSWD_MIN_LEN = 8;  // pasword must be between 8
const PASSWD_MAX_LEN = 32; // and 32 chars
const N_NUMBER    = 10;
const N_SYMBOL    = 33;
const N_UPPERCASE = 26;
const N_LOWERCASE = 26;
const N_TOTAL     = 95;

$len = 12;
$passwd = genPasswd($len);

echo '<pre>';
echo 'Generated password: ' . htmlentities($passwd) . PHP_EOL;
$passwdStrength = testPasswd($passwd);
echo 'Rating password strength: ' .
     round($passwdStrength*100, 2) .
     ' %' .PHP_EOL;
echo '</pre>';

function genPasswd(int $len = 12):string {
    if ($len < PASSWD_MIN_LEN || $len > PASSWD_MAX_LEN) {
        throw new ErrorException("password length must be between 8 and 32 chars");
    }
    $passwd = '';
    for ($i=0; $i<$len; $i++) {
        $passwd .= chr(random_int(C_MIN, C_MAX));
    }
    return $passwd;
}

function testPasswd(string $passwd):float {
    $err = 0;
    $len = strlen($passwd);
    // check password length
    if ($len < PASSWD_MIN_LEN) {
        echo "Password is too short.".PHP_EOL;
        $err++;
    } else if ($len > PASSWD_MAX_LEN) {
        echo "Password is too long.".PHP_EOL;
        $err++;
    }
    
    // check for numbers, lowercase, uppercase and symbols
    define ('NUMBER',    0b1110);
    define ('LOWERCASE', 0b1101);
    define ('UPPERCASE', 0b1011);
    define ('SYMBOL',    0b0111);
    $mask              = 0b1111;
    for ($i=0; $i<$len; $i++) {
        switch ($v = ord($passwd[$i])) {
            case ($v >= 48 && $v <= 57):
                $mask &= NUMBER;
                break;
            case ($v >= 56 && $v <= 90):
                $mask &= UPPERCASE;
                break;
            case ($v >= 97 && $v <= 122):
                $mask &= LOWERCASE;
                break;
            case ($v < 33 || $v > 127):
                $err++;
                echo "Password has invalid character.".PHP_EOL;
                break;
            default:
                $mask &= SYMBOL;
        }
    }
    
    $n = N_TOTAL;
    if ($mask) {
        if ($mask & ~NUMBER) {
            echo "Password has no Number.".PHP_EOL;
            $n -= N_NUMBER;
        }
        if ($mask & ~UPPERCASE) {
            echo "Password has no uppercase letter.".PHP_EOL;
            $n -= N_UPPERCASE;
        }
        if ($mask & ~LOWERCASE) {
            echo "Password has no lowercase letter.".PHP_EOL;
            $n -= N_LOWERCASE;
        }
        if ($mask & ~SYMBOL) {
            echo "Password has no Symbol.".PHP_EOL;
            $n -= N_SYMBOL;
        }
    }
    
    $strength = ($len * $n) /
                (PASSWD_MAX_LEN * N_TOTAL);
    
    return $err ? -$err : $strength;
}