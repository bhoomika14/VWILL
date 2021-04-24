<?php
   session_start();
   include("database.php");
   include("profile.php");
?>
<?php
   if(!isset($_SESSION["AID"]))
   {
	   header("Location: alogin.php");
   }
?>
<?php 
    if(isset($_REQUEST['id']))
    {
        $query="SELECT * FROM admin WHERE id='$_REQUEST[id]'";
        $res=$db->query($query);
        $row=$res->fetch_object();
    }

   if(isset($_REQUEST['id']))
{
    $target_dir="avatars/";
    $target_file=$target_dir.basename($_FILES["profileImage"] ["name"]);
    if(move_uploaded_file($_FILES["profileImage"] ["tmp_name"],$target_file))
    {
        echo $query="UPDATE admin SET AIMAGE='{$target_file}', ANAME='{$_POST["aname"]}', AADD='{$_POST["aadd"]}', AMOB='{$_POST["amob"]}', AMAIL='{$_POST["amail"]}' WHERE id='$_REQUEST[id]'";
        $db->query($sql);
         echo '<p>SUCCESS</p>';
        
    }
    else{
         echo '<p>Error</p>';
         }
 }

?>    
$target_dir="avatars/";
                       $target_file=$target_dir.basename($_FILES["profileImage"] ["name"]);
                       if(move_uploaded_file($_FILES["profileImage"] ["tmp_name"],$target_file))
                       {
                           $sql="INSERT INTO users(UIMAGE,UNAME,UADD,UMOB,UMAIL,UPASS)VALUES('{$target_file}', '{$_POST["uname"]}', '{$_POST["uadd"]}', '{$_POST["umob"]}', '{$_POST["umail"]}', '{$_POST["upass"]}')";
                            $db->query($sql);
                            echo '<script>
                            swal(
                              "Success!",
                              "You have successfully Registered.",
                              "success"
                         
                              )
                            </script>';
                            header("refresh:3 ; url=index.php");
                       }
                       else{
                           echo '<p>Error</p>';
                       }