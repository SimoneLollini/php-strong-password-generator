<?php
if (empty($_GET)) {
    echo 'Compila form';
} else {
    // var_dump($_GET['passwordLength']);
    generatePassword($_GET['passwordLength']);
}
function generatePassword($passLength)
{
    $newPassword = [];
    $AlphaNumString = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%&*_";
    // echo 'funzione avviata';
    for ($i = 0; $i < $passLength; $i++) {
        $random_numb = random_int(0, 69);
        // var_dump($random_numb);
        // echo $AlphaNumString[$random_numb];
        array_push($newPassword, $AlphaNumString[$random_numb]);
    }
    foreach ($newPassword as $chars) {
        echo $chars;
    }
}
