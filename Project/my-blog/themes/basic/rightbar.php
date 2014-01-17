<?php
$query = "SELECT * FROM posts ORDER BY post_id DESC LIMIT 0 , 3";
$result=mysql_query($query);
$rows = array();
        while($row = mysql_fetch_assoc($result))
        {
            $rows[]=$row;

        }
?>
<div id="rightbar">
		<form action="?action=user&&action2=search" method="post">
		<input  class="right" type="text" name="name" placeholder="Search by author" size="23"  />
		</form>
		
		<p class="rp">RECENT POSTS</p>
		<ul>
			<li style="margin-bottom:15px;"><a href="?action=post&&action2=post&&post_id=<?php echo $rows[0]['post_id'];?>"><?php echo $rows[0]['title']; ?></a></li>
			<li style="margin-bottom:15px;"><a href="?action=post&&action2=post&&post_id=<?php echo $rows[1]['post_id'];?>"><?php echo $rows[1]['title']; ?></a></li>
			<li><a href="?action=post&&action2=post&&post_id=<?php echo $rows[2]['post_id'];?>"><?php echo $rows[2]['title']; ?></a></li>
		</ul>
		
		<p class="rp">CATEGORIES</p>
		<ul>
			<li><a href="">Education</a></li>
			<li><a href="">Country</a></li>
			<li><a href="">Games</a></li>
		</ul>
	</div>