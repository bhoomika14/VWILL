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
	$sql="SELECT * FROM vjoin ORDER BY VID DESC";
	$result=mysqli_query($db,$sql);
	$vol=mysqli_fetch_all($result,MYSQLI_ASSOC);
?>
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
	  $sql="TRUNCATE TABLE vjoin";
    $db->query($sql);
  
    echo '<script>
    swal(
      "Deleted!",
      "Record has been successfully deleted",
      "success"

      )
    </script>';
    
    header("refresh:2 ; url=view_joins.php");
}

									
?>
</body>
</html>