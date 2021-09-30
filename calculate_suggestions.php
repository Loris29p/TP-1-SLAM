<?php 
    session_start();

    $text_global = "";

    function factorial($value)
    {
        if ($value == 0)
        {
            return 1;
        }
        else 
        {
            return $value * factorial($value-1);
        }
    }

    function puissance($value, $value2)
    {
        if ($value == 0)
        {
            return 1;
        }
        else 
        {
            return pow($value, $value2);
        }
    }

    $result_factoriel = null;
    $result_puissance = null;
    $number_multiplication = null;
    $result_racine = null;


    if (isset($_POST['number_factoriel']))
    {
        $number_factoriel = (int) $_POST['number_factoriel'];
        if ($number_factoriel >= 0)
        {
            $result_factoriel = factorial($number_factoriel);
        }
        else 
        {
            $result_factoriel = -1;
        }
    }

    if (isset($_POST['number_puissance']) AND isset($_POST['number_puissance_2']))
    {
        $number_puissance = (int) $_POST['number_puissance'];
        $number_puissance_2 = (int) $_POST['number_puissance_2'];

        if ($number_puissance >= 0)
        {
            $result_puissance = puissance($number_puissance, $number_puissance_2);
        }
        elseif ($number_puissance_2 < 0)
        {
            $result_puissance = puissance($number_puissance, $number_puissance_2);
            $result_puissance = 1 / $result_puissance;
        }
        elseif ($number_puissance_2 == 0)
        {
            $result_puissance = 1;
        }
        else 
        {
            $result_puissance = -1;
        }
    }

    if (isset($_POST['number_multiplication']) AND isset($_POST['number_multiplication_2']))
    {
        $number_multiplication = (int) $_POST['number_multiplication'];
        $number_multiplication_2 = (int) $_POST['number_multiplication_2'];

        $result_multiplication = $number_multiplication * $number_multiplication_2;
    }

    if (isset($_POST['number_racine']))
    {
        $number_racine = (int) $_POST['number_racine'];

        $result_racine = sqrt($number_racine);
    }
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>TP N°1 SLAM Loris</title>
    <link rel="shortcut icon" type="image/png" href="assets/img/favicon.png" />
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/Contact-Form-Clean.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/Navigation-Clean.css">
</head>

<body>
    <nav class="navbar navbar-light navbar-expand-md navigation-clean">
        <div class="container"><a class="navbar-brand" href="index.php">SLAM Loris</a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse"
                id="navcol-1">
                <ul class="nav navbar-nav ml-auto">
                <li class="nav-item" role="presentation"><a class="nav-link" href="II_B.php">II B</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="II_C.php">II C</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="IV_A.php">IV A</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="VI_2.php">IV 2</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="VI_3.php">VI 3</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="VIII_A.php">VIII A</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="VIII_B.php">VIII B</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="contact-clean">
        <form method="post" action="calculate_suggestions.php">
            <h2 class="text-center">VI 3 (Suggestions)</h2>

            <?php 
                if (!empty($_POST['choices']))
                {
                    foreach($_POST['choices'] as $selected)
                    {
                        if ($selected == "factoriel")
                        {
                            ?> 
                                <div class="form-group">
                                    <h1 style="font-size: 18px">Factoriel: </h1>
                                    <input class="border rounded form-control" type="number" name="number_factoriel" placeholder="Entier naturel">
                                </div>  
                            <?php
                        }
                        if ($selected == "puissance")
                        {
                            ?> 
                                <div class="form-group">
                                    <h1 style="font-size: 18px">Puissance: </h1>
                                    <input class="border rounded form-control" type="number" name="number_puissance" placeholder="Entier naturel">
                                    <input class="border rounded form-control" type="number" name="number_puissance_2" placeholder="Puissance de l'entier">
                                </div>  
                            <?php
                        }
                        if ($selected == "multiplication")
                        {
                            ?> 
                                <div class="form-group">
                                    <h1 style="font-size: 18px">Multiplication: </h1>
                                    <input class="border rounded form-control" type="number" name="number_multiplication" placeholder="Entier naturel">
                                    <input class="border rounded form-control" type="number" name="number_multiplication_2" placeholder="Multiplier l'entier par">
                                </div>  
                            <?php
                        }
                        if ($selected == "racine_entiere")
                        {
                            ?> 
                                <div class="form-group">
                                    <h1 style="font-size: 18px; ">Racine carré: </h1>
                                    <input class="border rounded form-control" type="number" name="number_racine" placeholder="Entier naturel">
                                </div>  
                            <?php
                        }
                    }
                }
            ?>

            <?php 
                if ($result_factoriel == null AND $result_puissance == null AND $number_multiplication == null AND $result_racine == null)
                {
                    ?>
                        <div class="form-group"><button class="btn btn-primary" style="margin-left: 80px" type="submit">Obtebir les résultats</button></div>
                    <?php
                }
            ?>
            <h1 style="font-size: 18px; margin-left: 80px">Résultats obtenus:</h1>

            <?php 
                if (isset($_POST['number_factoriel']))
                {
                    $text_global = $text_global . "Le factoriel de <strong>" . $number_factoriel . "</strong> est: </br><strong>" . $result_factoriel . "</strong></br>";
                }
                
                if (isset($_POST['number_puissance']) AND isset($_POST['number_puissance_2']))
                {
                    $text_global = $text_global . "<strong>" . $number_puissance . "</strong> à la puissance <strong>" . $number_puissance_2 . "</strong> est: </br><strong>" . $result_puissance . "</strong></br>";
                }
                
                if (isset($_POST['number_multiplication']) AND isset($_POST['number_multiplication_2']))
                {
                    $text_global = $text_global . "<strong>" . $number_multiplication . "</strong> multiplié par <strong>" . $number_multiplication_2 . "</strong> est: </br><strong>" . $result_multiplication . "</strong></br>";
                }
                
                if (isset($_POST['number_racine']))
                {
                    $text_global = $text_global . "La racine carré de <strong>" . $number_racine . "</strong> est: </br><strong>" . $result_racine . "</strong></br>";
                }
            ?>
            <p style="margin-left: 0px"><?php echo $text_global; ?></p>
        </form>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>