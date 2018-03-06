
<?php
if (isset($_POST['upload']))
{
	$target = "images/".basename($_FILES['image']['name']);
	$db=mysqli_connect("localhost", "root", "", "photos");
	$image= $_FILES['image']['name'];
	$text= $_POST['text'];
	
	$sql="insert into images(image, text) values ('$image', '$text')";
	mysqli_query($db, $sql);
	$result=mysqli_query("select * from images");
while($row=mysqli_fetch_array($db, $result)) {
	echo "<div id='img_div'>";
	echo "<p>".$row['text']. "</p>";
	echo "<img src='images/".$row['image']."'>";
	echo "</div>";
	?>