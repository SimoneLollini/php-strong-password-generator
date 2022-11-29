<!-- Milestone 3 (BONUS)
Possono essere scelti singolarmente (es. solo numeri) oppure possono essere combinati fra loro (es. numeri e simboli, oppure tutti e tre insieme).
Dare all’utente anche la possibilità di permettere o meno la ripetizione di caratteri uguali. -->

<!-- Milestone 4 (BONUS - OPZIONALE)
Invece di visualizzare la password nella index, effettuare un redirect ad una pagina dedicata che
tramite $_SESSION (documentazione) recupererà la password da mostrare all’utente. -->
<?php include './partials/function.php' ?>

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
        <div class="container">
            <form action="index.php" method="GET">
                <label for="letter">lettere</label>
                <input type="checkbox" name="chars_selection[]" value="letters" id="letters">

                <label for="numb">numeri</label>
                <input type="checkbox" name="chars_selection[]" value="numb" id="numb">

                <label for="special">caratteri speciali</label>
                <input type="checkbox" name="chars_selection[]" value="specials" id="special">
                <input name="passwordLength" min="8" max="50" type="number" placeholder="lunghezza password">
                <button type="submit">Invia</button>
            </form>
        </div>

    </main>









    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
    </script>
</body>

</html>