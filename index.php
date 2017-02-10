<?php 
    error_reporting(E_ALL);
    require_once "core/bootstrap.php";
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

<?php
    include $inner_page;
?>


<footer id="footer">
    <div class="container">
        <p class="text-muted">© bj bjatta ® 2016 — <?= date('Y'); ?> at tc.belhard.com &#10004;</p>
    </div>
</footer>
</body>
</html>
