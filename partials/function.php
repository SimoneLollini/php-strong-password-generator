<?php
$CharsString = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%&*_";
if (empty($_GET)) {
    echo 'Compila form';
} else {
    // var_dump($_GET['passwordLength']);
    var_dump($_GET['letter']);
    generatePassword($_GET['passwordLength'], $CharsString);
}

function generatePassword($passLength, $charsList)
{
    $newPassword = [];

    // echo 'funzione avviata';
    for ($i = 0; $i < $passLength; $i++) {
        $random_numb = random_int(0, 69);
        // var_dump($random_numb);
        // echo $charsList[$random_numb];
        array_push($newPassword, $charsList[$random_numb]);
    }
    foreach ($newPassword as $chars) {
        echo $chars;
    }
}
