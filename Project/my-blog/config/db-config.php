<?php
    $db_config=array();
    $db_config['host']='localhost';
    $db_config['user']='root';
    $db_config['password']='';
    $db_config['database']='my_blog';
    $db_object = NULL;
    function connectDB(){
        global $db_config;
        mysql_connect($db_config['host'],$db_config['user'],$db_config['password']);
        mysql_select_db($db_config['database']);
    }

?>
