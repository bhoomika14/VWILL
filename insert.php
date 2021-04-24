
<?php
   session_start();
   include("database.php");
   
?>
<?php
   if(!isset($_SESSION["UID"]))
   {
	   header("Location: ulogin.php");
   }
  
?>
<?php
	$sql="SELECT * FROM post";
	$result=mysqli_query($db,$sql);
	$posts=mysqli_fetch_all($result,MYSQLI_ASSOC);
?>

