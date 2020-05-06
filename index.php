<?php
$hp = 100;
define('max_dmg', 20);
define('min_dmg', 1);
$dmg = 0;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
Máš <?= $hp ?> bodů zdraví.
    <?php

do {
    $dmg = rand(max_dmg, min_dmg); 
    $hp = $hp - $dmg;
    
    if ($hp <= -1) {
        $hp = 0;
    }
    
    ?>
<br>Utrpěl si <?= $dmg ?> bodů poškození zbývá ti <?= $hp ?> bodů zdraví. <?php




} while ($hp > 0); ?>
<h1>Konec Hry</h1>



    
</body>
</html>