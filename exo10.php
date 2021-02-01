<!DOCTYPE html>

<html lang="fr" dir="ltr">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="HTML">
    <title>Exerice php partie 5 exercice 10</title>
    <link rel="stylesheet" href="assets/css/style.css">


</head>

<body>
    <nav>
        <ul>
            <li><a href="exo1.php">Ex 1</a></li>
            <li><a href="exo2.php">Ex 2</a></li>
            <li><a href="exo3.php">Ex 3</a></li>
            <li><a href="exo4.php">Ex 4</a></li>
            <li><a href="exo5.php">Ex 5</a></li>
            <li><a href="exo6.php">Ex 6</a></li>
            <li><a href="exo7.php">Ex 7</a></li>
            <li><a href="exo8.php">Ex 8</a></li>
            <li><a href="exo9.php">Ex 9</a></li>
            <li><a href="exo8.php">Ex 10</a></li>
        </ul>

        <h1>PHP Partie 5 : Les tableaux</h1>
        <h2>Exercice 10<h2>
                <p>Avec le tableau de l'exercice 5, afficher toutes les valeurs de ce tableau ainsi que les clés associés.<br>
                    Cela pourra être, par exemple, de la forme : Le département + nom du département + a le numéro + numéro du département

                </p>

                <?php
                $departements = [
                    02 => "Aisne",
                    59 => "Nord",
                    60 => "Oise",
                    62 => "Pas-de-Calais",
                    80 => "Somme"
                ];

                foreach ($departements as $key => $value) {
                    echo "departement : $value et son numéro le numero : $key <br>";
                }
                ?>

</body>

</html>