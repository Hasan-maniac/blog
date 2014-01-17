<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
$email=$_POST['email'];
$pass=$_POST['password'];
$query_string="SELECT * FROM users WHERE email='$email' AND password='$pass'";
connectDB();
$result=mysql_query($query_string);
if($result && mysql_num_rows($result)>0)
{
    
    $result=mysql_fetch_assoc($result);
    $_SESSION['current-user']['email']=$result['email'];
    $_SESSION['current-user']['full-name']=$result['full-name'];
    $_SESSION['current-user']['nick-name']=$result['nick-name'];
    $_SESSION['current-user']['user-id']=$result['user-id'];
    $current_user=$_SESSION['current-user'];
    echo "you are logged in successfully";
}


//echo $query_string;



?>
