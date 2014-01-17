<?php

$num = count($data);
?>
<h2 style="margin-left: 25px;">All members </h2>
<table style="border-collapse: collapse;margin-left: 25px;" class="tabled">
    <?php
    for($i=0;$i<$num;$i++){
        if($i%2 == 0){
    ?>
    <tr class="tabled">
        <td class="tabled"><a href="?action=user&&action2=post&&user_id=<?php echo $data[$i]['user_id']; ?>" style="color:black;"><?php echo $data[$i]['full_name'];?></a></td>
    </tr>
    <?php
        }
        else{
            ?>
    <tr class="alt">
        <td class="alt"><a href="?action=user&&action2=post&&user_id=<?php echo $data[$i]['user_id']; ?>" style="color:black;"><?php echo $data[$i]['full_name'];?></a></td>
    </tr>
    <?php
        }
    }
    ?>
</table>
