<?php 
    session_start();
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

            <div class="form-group">
                <input style="margin-left: 80px" type="checkbox" name="choices[]" id="factoriel" value="factoriel"> 
                <label for="factoriel">Factoriel</label>
                <input style="margin-left: 80px" type="checkbox" name="choices[]" id="puissance" value="puissance"> 
                <label for="puissance">Puissance</label>
            </div>
            <div class="form-group">
            <input style="margin-left: 80px" type="checkbox" name="choices[]" id="multiplication" value="multiplication"> 
                <label for="multiplication" style="width: 60px" >Multiplication</label>
                <input style="margin-left: 80px" type="checkbox" name="choices[]" id="racine_entiere" value="racine_entiere"> 
                <label for="racine_entiere">Racine entière</label>
            </div>

            <div class="form-group"><button class="btn btn-primary" style="margin-left: 100px" type="submit">Obtebir le résultat</button></div>
        </form>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>