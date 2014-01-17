<div id="leftbar">
    <?php
    if(!isset ($_SESSION['current-user'])){
    ?>
    <a class="noimg" href="?action=user&&action2=register">Register</a>
		<div id="login">
			<h2 class="ab"><center>Log  In  </center></h2>
		</div>
		<div id="login-form">
			<form action="index.php?action=user&&action2=do-login" method="post">
			<center>Email: </center>
			<center><input type="text" name="email" style="height:30px;margin-bottom:15px; border:1px solid gray;border-radius:20px;" /></center>
			<center>Password: </center>
			<center><input type="password" name="password" style="height:30px;margin-bottom:3px; border:1px solid gray;border-radius:20px;" /></center>
			<center><input type="submit" value="login" style="width:100px;height:30px;margin:20px; border:1px solid gray;border-radius:20px;" /> </center>
			</form>
		</div>
    <?php
}
else{
?>
    
    <ul class="left">
			<li class="left"><a class="left" href="?action=post&&action2=post-form">Create New Posts</a></li>
			<li class="left"><a class="left" href="?action=user&&action2=post">My Posts</a></li>
			<li class="left"><a class="left" href="?action=user&&action2=profile">View Profile</a></li>
			<li class="left"><a class="left" href="?action=user&&action2=edit-profile">Edit Profile</a></li>
			<li class="left"><a class="left" href="?action=user&&action2=logout">Logout</a></li>
		</ul>
    <?php
}
?>

</div>