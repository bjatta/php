<?php
$color = '#369;';
$red = 'background: '. $color .' color: white; font-weight: bold;';
$all = 'width: 2.5em; text-align: right; padding-right: .3em;';

function table($rows,$columns){

    echo "<table style=\"border: 1px solid #369;\">";
    
    for ($i=1; $i <$rows ; $i++) {
        echo "<tr>";
        for ($j=1; $j <$columns ; $j++) {
            echo '<td style="' . $GLOBALS['all'];
            echo ($i==1 || $j==1) ? $GLOBALS['red'] : '' ;
            echo '">' . $i*$j . "</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Таблица</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

<!-- Begin page content -->
<div class="container">
    <div class="page-header">
        <h1 class="page-title">Таблица</h1>
    </div>
        <?php table(10,10); ?>
        <?php table(7,10); ?>
        <?php table(10,7); ?>
</div>

<footer class="footer">
    <div class="container">
        <p class="text-muted">Copyright 2001 - <?= date('Y') ?></p>
    </div>
</footer>
</body>
</html>
