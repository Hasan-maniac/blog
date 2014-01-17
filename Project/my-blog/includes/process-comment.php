<?php
$post=array();
$post['user_id']=$current_user['user-id'];
$post['text']=$_POST['text'];
$post['post_id']=$_GET['value'];

$cols=  array_keys($post);
$cols=  implode('`,`', $cols);
$cols='`'.$cols.'`';
$vals=implode("','",$post);
$vals="'".$vals."'";
$query_string="INSERT INTO comments($cols)VALUES($vals)";
connectDB();
mysql_query($query_string);
include_once 'page-details.php';
?>
