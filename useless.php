<?php
if (isset($_POST['upload']))
{
	$target = "images/".basename($_FILES['image']['name']);
	  $db = mysqli_connect("Localhost", "root", "", "photos");
	  $image = $_FILES['image']['name'];
	  $text = $_POST['text'];
	  $sql = "insert into images (image, text) values ('$image', '$text')";
	  mysqli_query ($db, $sql);
	  
	  if (move_uploaded_file($_FILES['image']['tmp_name'], $target))
	  {
		  echo "Success";
	  }
}
else
{
	echo "Error!";
}
?>