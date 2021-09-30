<?php 
    session_start();

    $result = null;

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

    if (isset($_POST['number']) AND isset($_POST['number2']))
    {
        $number = (int) $_POST['number'];
        $number2 = (int) $_POST['number2'];

        if ($number >= 0)
        {
            $result = puissance($number, $number2);
        }
        elseif ($number2 < 0)
        {
            $result = puissance($number, $number2);
            $result = 1 / $result;
        }
        elseif ($number2 == 0)
        {
            $result = 1;
        }
        else 
        {
            $result = -1;
        }
    }
    else 
    {
        $result = "Aucun résultat";
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
        <form method="post">
            <h2 class="text-center">II C (Puissance)</h2>
            <div class="form-group"><input class="border rounded form-control" type="number" name="number" placeholder="Entier naturel"></div>
            <div class="form-group"><input class="border rounded form-control" type="number" name="number2" placeholder="Puissance de l'entier"></div>
            <div class="form-group"><small class="form-text text-danger">Entrer un entier naturel supérieur à 0.</small></div>
            <div class="form-group"><button class="btn btn-primary" type="submit">Calculer</button></div>
            <h1 style="font-size: 18px;">Résultat obtenu:</h1>
            <?php
                if (isset($_POST['number']))
                {
                    echo "<strong>" . $number . "</strong> à la puissance <strong>" . $number2 . "</strong> est:";
                }
                else
                {
                   $result = "";
                }
            ?>
            <p style="height: 95px;"><?php echo "<strong>" . $result . "</strong>"; ?></p>
        </form>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>