<?php
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

?>
<form action="index.php?action=user" method="post">

    <input name="action2" type="hidden" value="save-profile"/>
    <table style="margin-left: 30px;font-size: 18px;">
    <tr>
        <td>Full name:</td>
        <td><input type="text" name="full_name" value="<?php echo $full_name;?>"></td>
    </tr>
    <tr>
        <td>Nick name:</td>
        <td><input type="text" name="nick_name" value="<?php echo $nick_name;?>"></td>
    </tr>
    <tr>
        <td>Gender:</td>
    <td><input type="radio" name="gender" value="0" <?php if($gender==0)echo 'checked';?>>male 
    <input type="radio" name="gender" value="1"<?php if($gender==1)echo 'checked';?>> female</td>
    </tr>
    
    <tr>
        <td>Email:</td>
        <td><input type="text" name="email" value="<?php echo $email;?>"></td>
    </tr>
    <tr>
        <td>Password:</td>
        <td><input type="text" name="password" value="<?php echo $password;?>"></td>
    </tr>
    <tr>
        <td>Date of birth:</td>
        <td><input type="text" name="date_of_birth" value="<?php echo $date_of_birth;?>"></td>
    </tr>
    <tr>
        <td>Address:</td>
        <td><input type="text" name="address" value="<?php echo $address;?>"></td>
    </tr>
    <tr>
        <td>City:</td>
        <td><input type="text" name="city" value="<?php echo $city;?>"></td>
    </tr>
    <tr>
        <td>Country:</td>
        <td><input type="text" name="country" value="<?php echo $country;?>"></td>
    </tr>
    <!--<tr>
        <td></td>
    </tr>-->
    <tr>
        <td></td>
        <td><input type="submit" value="save" 
                   style="border:1px solid gray;border-radius:10px;width:70px;font-size:16px;margin-top:15px;height:27px;margin-left:85px; "></td>
    </tr>

</table>
</form>