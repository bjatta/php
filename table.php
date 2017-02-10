<?php
$color = '#369';
$red = 'background: '. $color .'; color: white; font-weight: bold;';
$all = 'width: 2.5em; text-align: right; padding-right: .3em;';

function table($rows,$columns,$color=''){

    echo "<table style=\"border: 1px solid #369;\">";


    if ('' == $color) $color = $GLOBALS['red'];
    else $color = 'background: '. $color .'; color: white; font-weight: bold;';
    
    for ($i=1; $i <= $rows ; $i++) {
        echo "<tr>";
        for ($j=1; $j <= $columns ; $j++) {
            echo '<td style="' . $GLOBALS['all'];
            echo ($i==1 || $j==1) ? $color : '' ;
            echo '">' . $i*$j . "</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
}
?>
<div class="container">
    <div class="page-header">
        <h1 class="page-title">Таблица умножения</h1>
    </div>
    <form action="/index.php?page=table" method="POST">
        <input type="number" name="columns" min="2" max="22" defaultvalue="11" value="13">
        <input type="number" name="rows" min="2" max="22" defaultvalue="11" value="13">
        <input type="color" name="color" defaultvalue="#369" value="369">
        <button> show </button>
    </form>
    <h1><?= $color ?></h1>
        <?php
        $columns=11;
        $rows   =11;
        $color  ="#369";
        if(isPost()) {
            $columns = getRequestVariable('columns',10);
            $rows = getRequestVariable('rows',10);
            $color = getRequestVariable('color','#369');
        }
        table($columns,$rows,$color);
        ?>
</div>
