<?php
$db=mysqli_connect("localhost", "root", "", "photos");
$sql= "select * from images";
$result = mysqli_query($db, $sql);
while($row=mysqli_fetch_array($result)) {
	echo "<div id='img_div'>";
	echo "<p>".$row['text']. "</p>";
	echo "<img src='images/".$row['image']."' class='imgpst'>";
	echo "</div>";
}
?>


<style>

.imgpst{
	height:500px;
	width:380px;
}
</style>