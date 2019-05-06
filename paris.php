<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="paris.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans|Work+Sans" rel="stylesheet">
    <title>meteo paris</title>
</head>
<body>
    <h1>Meteo a Paris</h1>
    <?php
    for($i=0; $i<5; $i++){
        echo '<h2>La meteo a Paris a J+'.$i.':</h2>';
        echo '<a href="https://www.prevision-meteo.ch/meteo/localite/paris"><img src="https://www.prevision-meteo.ch/uploads/widget/paris_'.$i.'.png" width="650" height="250" /></a>';
    }
    
    ?>
</body>
</html>