<?php 
    session_start();

    $result = null;

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

    if (isset($_POST['number']))
    {
        $number = (int) $_POST['number'];
        if ($number >= 0)
        {
            $result = factorial($number);
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
    
    
    require('affichage_II_V.php');
?>