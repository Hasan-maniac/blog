<form action="index.php?action=post" method="post" >

 <input type="hidden" name="action2" value="do-post"/>
    <table align="left" cellspacing="3">
<!--<tr>
    <td><h1>Create post</h1><hr></td>
</tr>-->
<tr>
<td>Title:</td>
</tr>
<tr>
<td><input name="tittle" type="text" size="54" style="height: 25px;"/></td>
</tr>
<tr>
<td>text</td>
</tr>
<tr>
<!--<td><input name="text" type="textarea" style="height: 200px; width: 354px;"></td>-->
    <td>
        <textarea name="text" style="height: 200px; width: 354px;" size="200"></textarea>
    </td>
</tr>
<tr>
    <td></td>
</tr>
<br>
<tr>
<td><input type="submit" size="30" value="Post" style="margin-top: 20px;width: 100px;height: 30px;border-radius: 10px;border: 1px solid gray;" /></td>
</tr>

</table>
</form>