<!-- Milestone 2
Verificato il corretto funzionamento del nostro codice,
spostiamo la logica in un file functions.php che includeremo poi nella pagina principale -->

<!-- Milestone 3 (BONUS)
Gestire ulteriori parametri per la password: quali caratteri usare fra numeri, lettere e simboli.
Possono essere scelti singolarmente (es. solo numeri) oppure possono essere combinati fra loro (es. numeri e simboli, oppure tutti e tre insieme).
Dare all’utente anche la possibilità di permettere o meno la ripetizione di caratteri uguali. -->

<!-- Milestone 4 (BONUS - OPZIONALE)
Invece di visualizzare la password nella index, effettuare un redirect ad una pagina dedicata che
tramite $_SESSION (documentazione) recupererà la password da mostrare all’utente. -->


<!-- Milestone 1

Una nostra funzione utilizzerà questo dato per generare una password casuale (composta da lettere, lettere maiuscole, numeri e simboli)
da restituire all’utente. Scriviamo tutto (logica e layout) in un unico file index.php -->


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


?>




<!doctype html>
<html lang="en">

<head>
    <title>Password Generator</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>

    <main>
        <!-- Creare un form che invii in GET la lunghezza della password. -->
        <form action="index.php" method="GET">
            <input name="passwordLength" min="8" max="50" type="number" placeholder="lunghezza password">
            <button type="submit">Invia</button>
        </form>
    </main>









    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
    </script>
</body>

</html>