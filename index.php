<?php

$arrayMonth = [1 => "Janvier", 2 => "Fevrier", 3 => "Mars", 4 => "Avril", 5 => "Mai", 6 => "Juin", 7 => "Juillet", 8 => "Août", 9 => "Septembre", 10 => "Octobre", 11 => "Novembre", 12 => "Décembre"];


?>


<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- cdn -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.1/font/bootstrap-icons.css">


    <title>Document</title>
</head>

<body>
    <div class="text-center mt-5">
        <form action="index.php" method="post">
            <select name="month" id="month">
                <option selected="selected">Mois</option>
                <?php
                foreach ($arrayMonth as $keyMonth => $month) { { ?>
                        <option value="<?= $month ?>"><?= $month ?></option>;
                <?php
                    }
                } ?>
            </select>

            <select name="years" id="years">
                <option selected="selected">Année</option>
                <?php
                for ($i = 1970; $i <= 2023; $i++) { ?>
                    <option value="<?= $i ?>"><?= $i ?></option>;
                <?php } ?>
            </select>
            <input name="display"  type="submit">

        </form>
    </div>







</body>

</html>