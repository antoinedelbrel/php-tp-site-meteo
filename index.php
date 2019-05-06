<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans|Work+Sans" rel="stylesheet">
    <title>Meteo</title>
</head>
<body>
    <h1>Site de la meteo</h1>
    <?php
    date_default_timezone_set('Europe/Paris');
    $date = date("d-m-y");
    $heure = date("H:i");
    echo("Nous sommes le $date et il est $heure");

    if($heure>7 || $heure<19){
        $color="black";
        $bgcolor="white";
    } else{
        $color="white";
        $bgcolor="black";
    }
    ?>    
    <style>
        body{
            background-color:<?php echo $bgcolor; ?>;
            color:<?php echo $color; ?>;
            font-family: 'Open Sans', sans-serif;
        }
        h1{
            text-align:center;
        }
        a{
            text-decoration: none;
        }
    </style>
    
    <div id="bdx">
        <a href="bordeaux.php"><h2>Meteo a bordeaux</h2></a>
    </div> 
    <div id="paris">
        <a href="paris.php"><h2>Meteo a paris</h2></a>
         
    </div>
</body>
</html>