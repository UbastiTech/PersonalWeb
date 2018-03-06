<?php
session_start();
require "register.php";
	$link=mysqli_connect("localhost", "root", "", "project");
	$username=mysqli_num_rows(mysqli_query($link, "select * from users where username='$_GET[username]'"));
	
if (isset($_GET['username']))
{
echo"
<!DOCTYPE html>
<html>
<head>
	<meta charset='utf-8' name='viewport' content='width=device-width initial-scale=1.0'>
	<link rel='stylesheet' href='project1account.css'>
	<link rel='icon' href='logo.png' type='image/x-icon'>
<title>Real Housing</title>
<header>
	<P>Welcome <div class='this_user'><span class='this_acc'><p><a href='file:///C:/Users/user/Desktop/Project/project1profile.html'method='GET'>$username</a></p></span></div><br>&emsp;Here, we let you find homes for sale or to let.</p>
	<p1>**Just click on the region you wish, or search by category, date posted or most-viewed.**</p1>
</header>
</head>
<body>
  <p>The list provided below is for checking ads posted under the regions provided, not for posting own ads. To post your ads, <a href='#'>Click here</a></p>
	<select class='regions'>
	  <option class='opT'>---</option>
	  <option class='opT'>Kisumu</option>
	  <option class='opT'>Meru</option>
	  <option class='opT'>Mombasa</option>
	  <option class='opT'>Nairobi</option>
	  <option class='opT'>Nyeri</option>
	</select>
<div class='profile1'>
  <a href='file:///C:/Users/user/Desktop/Project/project1profile.html' class='profile01'>My profile</a>
  <a href='file:///C:/Users/user/Desktop/Project/project1adpost.html' class='profile01'>My Ads</a>
  <a href='#' class='profile01'>Settings</a>
</div>
<div class='otherAds'>
  <p>Houses posted around</p><div class='user_ads'><p>(user region here):</p></div>
<div class='external_user'><p>Some User</p></div>
  <div class='Social'>
 <a href='http://www.facebook.com/claud's housing'><img src='fblogo.png' class='follow_us'></a>
 <a href='http://www.twitter.com/claud's housing'><img src='twitterlogo.png' class='follow_us'></a>
 <a href='http://www.linkedin.com/claud's housing'><img src='linkedinlogo.png' class='follow_us'></a>
</div>
</div>
<button id='logout' action='index.php'>Log Out</button>
</body>
</html>
";
}
else
{
	echo"Ngamia ee";
}
?>