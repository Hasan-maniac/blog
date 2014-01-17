
<?php
/*$a= count($data);
$b=array();
$c=array();
for($i=0;$i<$a;$i++) {
    $c[$i]=$data[$i]['title'];
    $b[$i]=$data[$i]['post_id'];
    echo "<a href=?action=post&&action2=post&&post_id=$b[$i]>$c[$i]</a>";
    echo "</br>"."Likes:".$data[$i]['likes']."_\t_\t_\t_"."Views:".$data[$i]['views']."<hr>";
}*/     //commented for practice
?>


    <?php
//global $data;
$a= count($data);
/*echo $data[1]['author'];
global $author;
echo $author;*/
$b=array();
$c=array();
$d=array();
for($i=0;$i<$a;$i++) {
    ?>
<table class="post" align="left" width="455">
    <tr>
        <td>
        <?php
    $c[$i]=$data[$i]['title'];
    $b[$i]=$data[$i]['post_id'];
    $d[$i]=$data[$i]['author'];
    $e[$i]=$data[$i]['user_id'];
    $t[$i]=$data[$i]['text'];
    echo "<a class=\"post-head\" href=?action=post&&action2=post&&post_id=$b[$i]><b class=\"to\">$c[$i]</b></a>";
    //echo "</br></br>"."Likes:".$data[$i]['likes']."_\t_\t_\t_"."Views:".$data[$i]['views'];
    echo "<p style=\"margin:0 0px;font-size:15px;color:gray;\">Written by <a href=\"?action=user&&action2=post&&user_id=$e[$i]\">".$d[$i]."</a></p>";
    echo "<p>".  substr($t[$i], 0, 250).".....</p>";
    //echo "<a href=?action=post&&action2=post&&post_id=$b[$i]>read more</a>";
    echo "<pre><p style=\"margin-bottom:-15px;font-size:16px;color:gray;\"><a href=?action=post&&action2=post&&post_id=$b[$i]>          read more..</a>   Likes: ".$data[$i]['likes']."   Views: ".$data[$i]['views']."</p></pre>";
    //echo "<pre>             Views: ".$data[$i]['views']."</pre>";
    
    ?>
            <!--<hr> commented for practice -->
            
            
        </td>
    </tr>
</table>
<?php
}
?>
