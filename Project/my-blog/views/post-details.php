<?php
        //echo "<h2>Post </h2>";
        echo "<b align=\"left\" style=\"font-size:24px;\">".$data['title']."</b><hr>";
		
	//echo "<a class=\"pstdlt\"></a>";	
        echo "<p align=\"left\">".$data['text']."</p><hr><p></p>";
        //echo "<hr>";
        $likePermission=0;
        foreach ($ldata as $value) {
            //echo $value['user_id'];
            if($value['user_id']==$_SESSION['user_id']){
                $likePermission=1;
            }
        }      
        if(isset($_SESSION['current-user'])&& $likePermission==0){
            
            /*echo "<p align=\"center\" style=\"margin-top: 20px;width: 80px;height: 25px;border-radius: 10px;border: 1px solid gray;background-color:#EEEEEE;color:black;\">
                <a href=?action=post&&action2=post-like style=\"color:black;\"> LIKE </a></p>";*/
            echo "<b>
                <a class=\"pstdlt\" href=?action=post&&action2=post-like> Like </a></b>";
            
        }
        if($_SESSION['current-user']['user_type']=='admin' || $_SESSION['current-user']['user_id']==$data['user_id']){ 
            $postid = $data['post_id'];
            echo "<b><a class=\"pstdlt\" href=?action=post&&action2=post-dlt&&post_id=$postid> Delete </a></b>";
        }
        echo "<center><p style=\"border:1px solid gray;padding:5px;font-size:20px;background-color:#222222;color:white;\">comments</p></center>";
        foreach ( $mdata as $value ) {           
              foreach ( $value as $key=>$final_value ) {
                  if($key=='post_id'){
                      $com = $value['user_id'];
                      $com_id = $value['comment_id'];
                      
echo "<p style=\"border:1px solid gray;margin-left:40px;padding:10px 0;padding-left:5px;background-color:#F7F7F7;\">".
        "  <a href=\"?action=user&&action2=post&&user_id=$com\">".$value['author']."</a>";
if($_SESSION['current-user']['user_type']=='admin' || $_SESSION['current-user']['user_id']==$data['user_id'] || $_SESSION['current-user']['user_id']==$com){
        echo "<a class=\"cmtdlt\" href=?action=post&&action2=comment-dlt&&comment_id=$com_id> . </a>";
}
        echo "</br>".$value['text']."</p>";
                  }
              }
              
        }
        if(isset($_SESSION['current-user'])){
            //echo "<h2 align=\"left\">Comments </h2>";
            $current_user=$_SESSION['current-user'];
            ?>
            <form action="index.php?action=post" name="comment_form" method="post">
     <input type="hidden" name="action2" value="do-comment"/>
    <table align="left" cellspacing="3">

<!--<tr>
<td>comment:</td>
</tr>-->
<tr>
<!--<td><input name="text" type="textarea" size="25" style="width: 400px;height: 100px;"/></td>-->
    <td>
        <textarea name="text" style="height: 90px; width: 415px;margin-left: 35px;"></textarea>
    </td>
</tr>
<tr>
<td><input type="submit" value="Post" style="margin-top: 20px;width: 100px;height: 30px;border-radius: 10px;border: 1px solid gray;margin-left: 35px;"/></td>
</tr>
</table>
</form>
<?php
        }
?>
