<?php
echo '<pre>';
print_r($_POST);
echo '<pre>';

$post=array();
$post['tittle']=$_POST['tittle'];
$post['user_id']=$current_user['user-id'];
$post['text']=$_POST['text'];
//$rating=$_POST['rating'];
//$date=$_POST['date'];
//echo $fullname;

$cols=  array_keys($post);
$cols=  implode('`,`', $cols);
$cols='`'.$cols.'`';
$vals=implode("','",$post);
$vals="'".$vals."'";
$query_string="INSERT INTO posts ($cols)VALUES($vals)";
connectDB();

mysql_query($query_string);
echo $query_string;
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

?>
