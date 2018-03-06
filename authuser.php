<?php
if (isset($_POST["login"]))
{
	if (isset ($_POST["username"]) &&
	($_POST["username"]=="claud95") &&
	isset($_POST["password"]) &&
	($_POST["password"]=="1234"))
	{
		$_SESSION["Authenticated"]=1;
		header("Location: project1account.php");
	}
	else
	{
		$_SESSION["Authenticated"]=0;
		header("Location:index.php");
	}
	session_write_close();
	header("Location:project1account.php");
}
?>