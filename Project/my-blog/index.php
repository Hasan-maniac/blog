<?php
session_start();
error_reporting (E_ALL ^ E_NOTICE);
ob_start();
if(isset($_SESSION['current-user'])){
    $current_user=$_SESSION['current-user'];
}
else
{
    $current_user=false;          
}

require_once 'config/constant.php';
require_once 'config/config.php';
require_once 'config/db-config.php';
require_once 'helpers/common.php';

$action=$_POST['action'];

if(!isset($action)|| empty($action)){

   $action=$_GET['action'];
}

$controller='';



switch($action){

    case 'user':
        $controller='user.php';
        break;
    case 'post':
        $controller='post.php';
        break;
    default:
        $controller='post.php';
}
include_once CONTROLLER_PATH.$controller;
loadTheme($current_theme);

?>
