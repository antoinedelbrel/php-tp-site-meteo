<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="bordeaux.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans|Work+Sans" rel="stylesheet">
    <title>meteo bordeaux</title>
</head>
<body>
    <a href="index.php"><h2>Accueil</h2></a>
    <h1>Meteo a bordeaux</h1>
    <?php
    for($i = 0; $i < 5; $i++){
        echo '<h2>La meteo a bordeaux a J+'.$i.':</h2>';
        echo '<a href="https://www.prevision-meteo.ch/meteo/localite/bordeaux"><img src="https://www.prevision-meteo.ch/uploads/widget/bordeaux_'.$i.'.png" width="650" height="250" /></a>';
    }
    ?>

</body>
</html>