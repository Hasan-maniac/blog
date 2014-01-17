<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
global $query;
echo $query;
?>
<table class="profile" style="margin-top: 20px;">
    <tr>
        <td>Full name:</td>
        <td><?php echo $full_name;?></td>
    </tr>
    <tr>
        <td>Nick name:</td>
        <td><?php echo $nick_name;?></td>
    </tr>
    <tr>
        <td>Gender:</td>
        <td><?php if($gender==0){
            echo "Male";
            }
                  else{
        echo "Female";
                  }?></td>
    </tr>
    <tr>
        <td>Email:</td>
        <td><?php echo $email;?></td>
    </tr>
    <tr>
        <td>Password:</td>
        <td><?php echo $password;?></td>
    </tr>
    <tr>
        <td>Date Of Birth:</td>
        <td><?php echo $date_of_birth ;?></td>
    </tr>
    <tr>
        <td>Address:</td>
        <td><?php echo $address;?></td>
    </tr>
    <tr>
        <td>City:</td>
        <td><?php echo $city;?></td>
    </tr>
    <tr>
        <td>Country:</td>
        <td><?php echo $country;?></td>
    </tr>
</table>
