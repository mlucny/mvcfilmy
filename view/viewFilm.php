<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>  
    <head>
        <meta charset="utf-8" />
        <title>Informace o filmu</title>
    </head>  
    <body>  
        <h1>Informace o filmu</h1>
        <p>Název: <?= $film['nazev'] ?></p>
        <h4>Obsah</h4>
        <p><?= $film['obsah'] ?></p>
        <p>Hodnocení: <?= $film['hodnoceni'] ?></p>
        <p><a href="index.php">Seznam filmů</a></p>
    </body>  
</html>  