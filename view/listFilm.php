<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>  
    <head>
        <meta charset="utf-8" />
        <title>Seznam filmů</title>
    </head>  

    <body>  
        <h1>Seznam filmů</h1>
        <table>  
            <thead>
                <tr>
                    <th>Název</th>
                    <th>Rok</th>
                    <th>Hodnocení</th>
                    <th>Formát</th>
                </tr>
            </thead>
            <tbody>
            <?php    
            foreach ($films as $idfilmy => $film):
            ?>    
                <tr>
                    <td><a href="index.php?id=<?= $film['idfilmy'] ?>"><?= $film['nazev'] ?></a></td>
                    <td><?= $film['rok'] ?></td>
                    <td><?= $film['hodnoceni'] ?></td>
                    <td><?= $film['format'] ?></td>
                </tr>
            <?php    
            endforeach;
            ?>
            </tbody>
        </table>  
    </body>  
</html>  
