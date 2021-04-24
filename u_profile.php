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


   
<!DOCTYPE html>
<html lang="en">

<head>
  <title>v-will</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="admin/css/bootstrap.css">
  
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body style="background-color: #f8ef42; background-image: linear-gradient(315deg, #f8ef42 0%, #0fd64f 74%);">

<div class="mt-5 card container" >
    <!--<div class="row">
  		<div class="col-sm-10"><h1>User name</h1></div>
    	<div class="col-sm-2"><a href="/users" class="pull-right"><img title="profile image" class="img-circle img-responsive" src="http://www.gravatar.com/avatar/28fd20ccec6865e2d5f0e1f4446eb7bf?s=100"></a></div>
    </div>--> 
    <div class="card-body">
    <div class="row">
    
  		<div class="col-sm-3"><!--left col-->
          <?php
    if(isset($_POST['submit']))
    {
        $sql="SELECT * FROM users WHERE UID='{$_SESSION["UID"]}'";
        $res=$db->query($sql);
        if($res->num_rows>0)
        {
            $target_dir="avatars/";
            $target_file=$target_dir.basename($_FILES["profileImage"] ["name"]);
            if(move_uploaded_file($_FILES["profileImage"] ["tmp_name"],$target_file))
            {
                $s="UPDATE users SET UIMAGE='{$target_file}', UNAME='{$_POST['aname']}', UADD='{$_POST['aadd']}', UMOB='{$_POST['amob']}', UMAIL='{$_POST['amail']}' WHERE UID=".$_SESSION["UID"];
                $db->query($s); 
                echo '<script>
                swal(
                  "Success!",
                  "Profile has been updated successfully.",
                  "success"
             
                  )
                </script>';
                header("refresh:3 ; url=users.php");
            }
        }
        else
        {
            echo "<p>Error</p>";
        }
    }
    
?>
              
    <form class="form" action="u_profile.php" method="post" enctype="multipart/form-data">
      <div class="text-center mt-5 pt-5">
        <img src="http://ssl.gstatic.com/accounts/ui/avatar_2x.png" class="avatar img-circle img-thumbnail" onclick="triggerClick()" id="profileDisplay" width=250 height=250 class="img-circle">
        <h6>Upload a different photo...</h6>
        <label for="profileImage"></label>
        <input type="file" class="text-center center-block file-upload ml-3" name="profileImage" onchange="displayImage(this)" id="profileImage" required>
      </div></hr><br>

               
          
          
          
          <!--<ul class="list-group">
            <li class="list-group-item text-muted">Activity <i class="fa fa-dashboard fa-1x"></i></li>
            <li class="list-group-item text-right"><span class="pull-left"><strong>Shares</strong></span> 125</li>
            <li class="list-group-item text-right"><span class="pull-left"><strong>Likes</strong></span> 13</li>
            <li class="list-group-item text-right"><span class="pull-left"><strong>Posts</strong></span> 37</li>
            <li class="list-group-item text-right"><span class="pull-left"><strong>Followers</strong></span> 78</li>
          </ul>--> 
               
          <!--<div class="panel panel-default">
            <div class="panel-heading">Social Media</div>
            <div class="panel-body">
            	<i class="fa fa-facebook fa-2x"></i> <i class="fa fa-github fa-2x"></i> <i class="fa fa-twitter fa-2x"></i> <i class="fa fa-pinterest fa-2x"></i> <i class="fa fa-google-plus fa-2x"></i>
            </div>
          </div>-->
          
        </div><!--/col-3-->
    	<div class="col-sm-9">
            <!--<ul class="nav nav-tabs">
                <li class="active">My Profile</li>
                <!--<li><a data-toggle="tab" href="#messages">Menu 1</a></li>
                <li><a data-toggle="tab" href="#settings">Menu 2</a></li> 
              </ul>-->
           <h1>My Profile</h1>
              
          <div class="tab-content">
            <div class="tab-pane active" id="home">
                <hr>
                  
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="uname"><h4>Name</h4></label>
                              <input type="text" class="form-control" name="uname"  placeholder="Name" title="Enter your Name" required>
                          </div>
                      </div>

                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="uadd"><h4>Address</h4></label>
                              <textarea class="form-control" name="uadd" placeholder="Address" title="Enter your Address" required></textarea>
                          </div>
                      </div>
                      
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="umob"><h4>Phone</h4></label>
                              <input type="text" class="form-control" name="umob" placeholder="Phone Number" title="Enter your phone number" required>
                          </div>
                      </div>
          
                     
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="umail"><h4>Email</h4></label>
                              <input type="email" class="form-control" name="umail" placeholder="you@email.com" title="Enter your email" required>
                          </div>
                      </div>
                      
                      <!--<div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="password"><h4>Old Password</h4></label>
                              <input type="password" class="form-control" name="password" id="password" placeholder="password" title="Enter old password.">
                          </div>
                      </div>
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                            <label for="password2"><h4>New Password</h4></label>
                              <input type="password" class="form-control" name="password2" id="password2" placeholder="password2" title="Enter new password."><i class="glyphicon glyphicon-ok-sign"></i>
                          </div
                      </div>--> 
                      <div class="form-group">
                           <div class="col-xs-12">
                                <br>
                              	<button class="btn btn-lg btn-success" type="submit" name="submit">Save</button></a>
                               	<button class="btn btn-lg" type="reset"><i class="glyphicon glyphicon-repeat"></i> Reset</button>
                            </div>
                      </div>
              	</form>
              
              <hr>
              
             </div><!--/tab-pane-->
            
          </div><!--/tab-content-->

        </div><!--/col-9-->
    </div><!--/row-->
</div>
<script>
        $(document).ready(function() {

    
var readURL = function(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('.avatar').attr('src', e.target.result);
        }

        reader.readAsDataURL(input.files[0]);
    }
}


$(".file-upload").on('change', function(){
    readURL(this);
});
});
</script>
<script>
    function triggerclick()
{
    document.querySelector('#profileImage').click();
}
function displayImage(e)
{
    if(e.files[0])
    {
        var reader=new FileReader();
        reader.onload=function(e){
            document.querySelector('#profileDisplay').setAttribute('src',e.target.result);
        }
        reader.readAsDataURL(e.files[0]);
    }

}
</script>

</body>
</html>