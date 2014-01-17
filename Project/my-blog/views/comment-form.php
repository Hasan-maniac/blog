<script>
$(document).ready(function(){
$('#sub').click(function(){
var com=$('#text').val();
$.ajax({

type:"POST",
url:"index.php",
data:'action=post&action2=do-comment'+"&text="+com,
success:function(result){$('body').html(result)},
error: function(){alert(no)}
})
});
</script>
<form action="index.php?action=post" name="comment_form" method="post">
     <input type="hidden" name="action2" value="do-comment"/>
    <table align="center" cellspacing="3">


<tr>
<td>comment:</td>
<td><input id="text" name="text" type="text" size="25"/></td>
</tr>
<tr>
<td><input id="sub" type="submit" value="Post"/></td>
</tr>
</table>
</form>



