<?php  
function menu($menu, $direction='line'){
    echo '<ul class="nav navbar-nav">';
        foreach ($menu as $key => $value) {
            if ($direction=='line') {echo '<li><a href="' . $value['href'] . '">'. $value['text'].'</a></li>';}
            else {echo '<li><a href="' . $value['href'] . '" class = "noUnderLine">'. $value['text'].' v </a></li>';}
        }
    echo '</ul>';
}
function isPost(){
	return ($_SERVER['REQUEST_METHOD'] == 'POST');
}

function getRequestVariable($key,$value){
    return (!empty($_REQUEST[$key])) ? $_REQUEST[$key] : $value;
}
?>