<?php
 $value=$_GET['value'];
 //echo $value;
 $query_string="SELECT * FROM posts WHERE post_id=$value";
 connectDB();
 $result=  mysql_query($query_string);
 if(1)
 {
     $result=mysql_fetch_object($result);
     echo "Title: ".$result->tittle."<br>";
     $user_id="SELECT full_name FROM users WHERE $result->user_id";
     $res=mysql_query($user_id);
     $res=mysql_fetch_array($res);
     echo "Author: ".$res['full_name']."<br>";
     echo "Description: ".$result->text."<br><hr>";
 }
 echo $value;
 $query_string="SELECT * FROM comments WHERE post_id=$value";
 $re=mysql_query($query_string);
 if($re && mysql_num_rows($re)>0)
 {
    while($row = mysql_fetch_object($re))
    {
       //$data=$row->tittle;
     $user_id="SELECT full_name FROM users WHERE $row->user_id";
     $res=mysql_query($user_id);
     $res=mysql_fetch_array($res);
     echo "User: ".$res['full_name']."<br>";
     echo "Comment: ".$result->text."<br><hr>";
    }
 }
 else
 {
     echo "No comments yet.<br>";
     echo "<hr>";
 }
 include_once 'comment-form.php';

?>
