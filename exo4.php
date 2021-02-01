<!DOCTYPE html>

<html lang="fr" dir="ltr">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="HTML">
    <title>Exerice php partie 5 exercice 4</title>
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

        <h1>PHP Partie 4 : Les tableaux</h1>
        <h2>Exercice 4<h2>
                <p>Avec le tableau de l'exercice 1, modifier le mois de aout pour lui ajouter l'accent manquant.
                </p>

                <?php
                $months = [
                    1 => "Janvier<br>",
                    2 => "Février",
                    3 => "Mars",
                    4 => "Avril",
                    5 => "Mai",
                    6 => "Juin",
                    7 => "Juillet",
                    8 => "Aout",
                    9 => "Septembre",
                    10 => "Octobre",
                    11 => "Novembre",
                    12 => "Décembre",
                ];

                $months[8] = "Août";
                echo $months[8];
                ?>

</body>
</html>