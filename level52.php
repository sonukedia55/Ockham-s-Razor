<?php
include "session.php";

$db_host = "localhost";
$db_username = "host";
$db_pass = "";
$db_name = "event";


$con = mysqli_connect("$db_host","$db_username","$db_pass","$db_name");
if(!$_SESSION['user']){
	header('Location:index.php');
}
if(isset($_SESSION['user'])){
	$aid=$_SESSION['user'];
	$ddf = mysqli_query($con, "SELECT  email,name,qstn FROM entry  WHERE id='$aid' ");
		{
		while($r = mysqli_fetch_array($ddf)){

			$aemail = $r['email'];
			$qstn = $r['qstn'];

			$aname = $r['name'];
			if($qstn!="level8"){header('Location: '.$qstn.'.php');}
		}
}}
?><html>
<body>

haha, you have completed all the question!!!<br><Br>
<form method="post" action="session.php">
<input type="submit" name="logout" value="Logout"/>
</form>
</body>
</html>
