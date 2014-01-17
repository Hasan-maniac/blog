<?php
function &getDBObject(){
    global $db_object;
    if($db_object){
        return $db_object;
    }
    require_once 'library/db/mysql.php';
    global $db_config;
    $tmp = new Mysql($db_config['host'], $db_config['user'],$db_config['password'], $db_config['database']);
    $tmp->connect();
    
    $db_object = &$tmp;
    return $db_object;
}
function getModel($model_name){
    $model_file= MODEL_PATH.strtolower($model_name).FILE_EXT;
    if(file_exists($model_file)){
        require_once($model_file);
        return new $model_name();
    }
    return NULL;
}

function loadTheme($theme_name){
    
    global $current_theme;
    require_once THEME_PATH.$theme_name.'/basic'.FILE_EXT;
}
function setViewItem($name, $content){
    global $view_items;
    $view_items[$name]=$content;
    
}
function getViewItem($name){
    global $view_items;
    if(array_key_exists($name, $view_items)){
        return $view_items[$name];
    }
    return false;
}
function loadView($view_name, $data=array(),$mdata=array(), $ldata=array(), $return=true){
   
    ob_start();
    extract($data);
    extract($mdata);
    extract($ldata);
    require_once VIEW_PATH.$view_name.FILE_EXT;
    
    return ob_get_clean();
}
function loadList($view_name){
    require_once VIEW_PATH.$view_name.FILE_EXT;
}
?>
