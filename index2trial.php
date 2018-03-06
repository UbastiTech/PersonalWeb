<?php
session_start();

	if (isset ($_POST["login"])) 
{
	$pwd=md5($_POST["password"]);
	$link=mysqli_connect("localhost", "root", "", "project");
	$count=0;
	$res=mysqli_query($link, "select 1 from users where username='$_POST[username]' && password ='$pwd'");   
	$count=mysqli_num_rows($res);
	$uname=mysqli_real_escape_string($link, $_POST['username']);

	 if ($count>0) 
	 {
		 $_SESSION['user']=$uname;
	 }
}


<?php
echo"<div class='errormsg'>";
	echo "<p>You must be logged in to view this page!</p><br>";
	echo"</div>";
	echo"
<!DOCTYPE html>
<html>
<head>
<meta name='viewport' charset='utf-8' content='width=device-width'>
<title>Ubasti Housing Project</title>
<link rel='icon' href='logo.ico' type='image/x-icon'>
<link rel='stylesheet' href='project1.css'>
<header>
  <h1>Ubasti Housing Project</h1>
    <nav>
	  <ul style='list-style-type:none;font-size:20px;background-color:#c2dfff;height:30px;'>
	    <li style='display:inline;padding:17px;'><a href='file:///C:/Users/user/Desktop/Project/Project1.html' class='active'style='text-decoration:none;color:#555;'>Home</a></li>
		<li style='display:inline;padding:17px;'><a href='file:///C:/Users/user/Desktop/Project/Project1About.html'style='text-decoration:none;color:#e8491d;'>About</a></li>
		<li style='display:inline;padding:17px;'><a href='file:///C:/Users/user/Desktop/Project/project1services.html'style='text-decoration:none;color:#e8491d;'>Services</a></li>
	  </ul>
	</nav>
</header>
</head>
<body style='margin:0;padding:0;background:#C2DFFF;'>
<div class='intro'>
	<p1><em>Welcome to Ubasti Housing services,<br>where we give you information about unoccupied houses,<br>both new and previously occupied.
	<br>We let you find owners who've put their homes up for sale at cheap prices, and newly completed ones too.<br><br>We also let you sell/ let your house, 
	whether you are moving out or just renting.<br> Just post an ad, and a whole database of potential buyers/ tenants will view it.</em></p1>
</div>
<div id='useracc'>
<div class='Sign_In'>
<p><font color='#2b3856'>Already have an account?? <br>Sign In here<br>&ensp;&#10095;&#10095;</font></p>
</div>
<div style='margin:0;padding:0;background:#C2DFFF; color:#000; margin-left:30%;'>
 <h1>Login</h1>   
 <form method='post' action=''>
   <table style='margin:0;padding:0;background:#C2DFFF;'>
     <tr>
	   <td>
	     <b>Username:</b>
	   </td>
	   <td>
	     <input type='text' name='username' required pattern='^[A-Za-z0-9 ]+' style='padding:4px; margin-left:-156px;text:#e8491d;'>
	   </td>
	 </tr>
	  <tr>
	   <td>
	     <b>Password:</b>
	   </td>
	   <td>
	     <input type='password' name='password' required pattern='^[A-Za-z0-9]+' style='padding:4px;margin-left:-156px;'>
	   </td>
	 </tr>
	  <tr>
	   <td>
	     <input type='submit' name='login' value='Log In'id='login'>
	   </td>
	 </tr>
   </table>
 </form>
 <br><br><br>
</div>	
<div class='info'>
	<p2>Don't have an account??</p2><br><p2>Sign up below</p2> <br><p2>&ensp;&#10095;&#10095;</p2>
</div><br><br>
<div style='margin:0;padding:0;background:#C2DFFF; color:#000; margin-left:30%;margin-bottom:20px;'>
 <h1>Sign Up</h1>
 <form method='post' action='register.php'>
   <table>
   <tr>
	   <td>
	     <b>Name:</b>
	   </td>
	   <td>
	     <input type='text' name='t1' required pattern='^[A-Za-z]+' style='padding:4px;margin-left:-156px;'>
	   </td>
	 </tr>
	 <tr>
	   <td>
	     <b>Email:</b>
	   </td>
	   <td>
	     <input type='text' name='t2' required pattern='^[@.A-Za-z0-9]+' style='padding:4px;margin-left:-156px;'>
	   </td>
	 </tr>
     <tr>
	   <td>
	     <b>Username:</b>
	   </td>
	   <td>
	     <input type='text' name='t3' required pattern='^[A-Za-z0-9 ]+' style='padding:4px;margin-left:-156px;'>
	   </td>
	 </tr>
	  <tr>
	   <td>
	     <b>Password:</b>
	   </td>
	   <td>
	     <input type='password' name='t4' required pattern='^[A-Za-z0-9]+' style='padding:4px;margin-left:-156px;'>
	   </td>
	 </tr>
	  <tr>
	   <td>
	     <input type='submit' name='submit1' value='Sign Up' id='register'>
	   </td>
	 </tr>
   </table>
 </form>
 </div>
</div>
<div class='Social'>
 <a href='http://www.facebook.com/clauds real housing'><img src='fblogo.png' class='follow_us'></a>
 <a href='http://www.twitter.com/clauds real housing'><img src='twitterlogo.png' class='follow_us'></a>
 <a href='http://www.linkedin.com/clauds real housing'><img src='linkedinlogo.png' class='follow_us'></a>
</div>
</body>
</html>";
?>
 <?php
if (isset ($_POST["login"])) 
{
	$pwd=md5($_POST["password"]);
	$link=mysqli_connect("localhost", "root", "", "project");
	$count=0;
	$res=mysqli_query($link, "select * from users where username='$_POST[username]' && password ='$pwd'");   
	$count=mysqli_num_rows($res);
	 if ($count>0) 
	 {
		  ?>
		 <script type="text/javascript">
		 window.location="project1account.php";
		  </script>		 
		 <?php
	 }
	 else
	 {
		  ?>
		 <script type="text/javascript">
		 alert("Incorrect username or password!");
		 </script>	
		 <?php

	 }
		 
}
?>

