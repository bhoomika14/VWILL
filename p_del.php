<?php
   session_start();
   include("database.php");
   
?>
<?php
   if(!isset($_SESSION["AID"]))
   {
	   header("Location: alogin.php");
   }
  
?>
<?php
    $sql="SELECT * FROM admin";
    $res=$db->query($sql);
    $users=mysqli_fetch_all($res,MYSQLI_ASSOC);
?>
<?php
	$sql="SELECT * FROM post ";
	$result=mysqli_query($db,$sql);
	$posts=mysqli_fetch_all($result,MYSQLI_ASSOC);
?>
<!DOCTYPE html>
<!--
	Future Imperfect by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)ORDER BY PID DESC
-->
<html>
	<head>
		<title>v-will.org</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="user\asset\css\main.css">
		<link rel="stylesheet" href="user\asset\css\style.css">
		<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
		<link href="https://fonts.googleapis.com/css?family=Montserrat|Nunito|Poppins:500|Roboto&display=swap" rel="stylesheet">
		

	</head>
  <body>
<?php 
  if(isset($_GET['id']))
{
  $sql="DELETE FROM post WHERE PID={$_GET['id']}";
  $db->query($sql);
  
    echo '<script>
    swal(
      "Deleted!",
      "Record has been successfully deleted",
      "success"

      )
    </script>';
    
    header("refresh:2 ; url=a_delete.php");
}

									
?>
</body>
</html>