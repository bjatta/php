<?php 

error_reporting(E_ALL);

$time_of_day    = (int) date('H');
$greetings      = 'Доброй ночи!';

if ($time_of_day > 6) {
    if ($time_of_day < 12) {
        $greetings = ' Добрейший утречёк!';
    }
    elseif ($time_of_day < 18) {
        $greetings = ' Добрейший денёчек вам однако!';
    }
    elseif ($time_of_day < 24) {
        $greetings = ' Добрейший вечерок.';
    }
}

$menu = [
    ['href' => '/about.php', 'text' => 'обо мне'],
    ['href' => '/version.php', 'text' => 'версия php '],
    ['href' => '/ToDo.list/index.html', 'text' => 'Дела ...'],
    ['href' => '/table.php', 'text' => 'Таблица '],
    ['href' => '/ending.php', 'text' => 'Окончания'],
    ['href' => 'https://goo.gl/RnC1AM', 'text' => 'GPST']
];

function menu($menu, $direction='line'){
    echo '<ul class="nav navbar-nav">';
        foreach ($menu as $key => $value) {
            if ($direction=='line') {echo '<li><a href="' . $value['href'] . '">'. $value['text'].'</a></li>';}
            else {echo '<li><a href="' . $value['href'] . '" class = "noUnderLine">'. $value['text'].' v </a></li>';}
        }
    echo '</ul>';
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>PHP. Задания...</title>
<!--     <link rel="stylesheet" href="css/bootstrap.min.css">
     -->    <link rel="stylesheet" href="css/style.css">
</head>

<body>
<!-- Fixed navbar -->
<nav id="topNavBar">
    <div class="container">
        <div class="navbar-header">
            <a class="noUnderLine navbar-brand" href="#">Основы php</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
        <?php menu($menu); ?>
        </div><!--/.nav-collapse -->
    </div>
</nav>

<!-- Begin page content -->
<div class="container">
    <div class="page-header">
        <h1><?= $greetings ?></h1>
    </div>
    <p class="lead"> С меню разобрался, что следующее? <code>padding-top: 60px;</code> Или нет <code>body &gt; .container</code>.</p>
    <p><a href="#"></a></p>
</div>

<footer id="footer">
    <div class="container">
        <p class="text-muted">© bj bjatta ® 2016 — <?= date('Y'); ?> at tc.belhard.com &#10004;</p>
    </div>
</footer>
</body>
</html>
