<?php

$query_string="SELECT * FROM posts WHERE 1";
connectDB();
$result=mysql_query($query_string);

if($result && mysql_num_rows($result))
{
    while($row = mysql_fetch_object($result))
    {
       //$data=$row->tittle;
        echo "<a href=?action=page-details&value=$row->post_id>$row->tittle</a>";
        echo "</br>";

        //echo $tittle;
    }
    //$result=mysql_fetch_assoc($result);
    //print_r($result);
}


/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

?>
