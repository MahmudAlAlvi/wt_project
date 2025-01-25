<?php

function ipputlen($x) {
    if (!ctype_alpha(substr($x, 0, 1))) {
       // echo "first character is not a letter";
        return false;
    }
    return true;
}


    function hasDigit($x){
    $containsDigit = false;
    for ($i = 0; $i < strlen($x); $i++) {
        if (ctype_digit($x[$i])) {
            $containsDigit = true;
            break;
        }
    }
    if (!$containsDigit) {
        //echo "password contains at least one digit";
        return false;
    }
    return true;
}

function hasSpecialChar($x){
    $containsSpecialChar = false;
    for ($i = 0; $i < strlen($x); $i++) {
        if (!ctype_alnum($x[$i])) {
            $containsSpecialChar = true;
            break;
        }
    }
    if (!$containsSpecialChar) {
        //echo "password contains at least one special character";
        return false;
    }
    return true;
}

?>
