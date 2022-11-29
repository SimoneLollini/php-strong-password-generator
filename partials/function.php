<?php
$charsString = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%&*_";

if (isset($_GET['chars_selection'])) {
    $charsSelection = $_GET['chars_selection'];
    // var_dump($charsSelection);
    // echo '<br>';
    // Gestire ulteriori parametri per la password: quali caratteri usare fra numeri, lettere e simboli.
}
if (empty($_GET)) {
    echo 'Compila form';
} else {
    // var_dump($_GET['passwordLength']);
    generatePassword($_GET['passwordLength'], $charsString);
}

function generatePassword($passLength, $charsList)
{
    $newPassword = [];

    // echo 'funzione avviata';
    for ($i = 0; $i < $passLength; $i++) {
        $random_numb = random_int(0, strlen($charsList) - 1);
        // var_dump($random_numb);
        // echo $charsList[$random_numb];
        array_push($newPassword, $charsList[$random_numb]);
    }
    foreach ($newPassword as $chars) {
        echo $chars;
    }
}
