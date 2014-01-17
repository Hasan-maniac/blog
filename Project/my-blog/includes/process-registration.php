<?php
echo '<pre>';
print_r($_POST);
echo '</pre>';
$data= array();
$data['full_name']= $_POST['fname'];
$data['nick_name']= $_POST['lname'];
$data['email']= $_POST['email'];
$data['password']= $_POST['pass'];
$data['gender']= $_POST['gender'];
$data['address']= $_POST['add'];
$data['country']= $_POST['countries'];
$data['city']= $_POST['city'];
$cols=  array_keys($data);
$cols=  implode('`,`', $cols);
$cols='`'.$cols.'`';
$vals=implode("','",$data);
$vals="'".$vals."'";
$query_string="INSERT INTO users ($cols)VALUES($vals)";
connectDB();

mysql_query($query_string);
echo $query_string;



?>
