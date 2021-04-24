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
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="admin/css/bootstrap.css">
    <link rel="stylesheet" href="admin/css/style.css">

    <!-- Themify icons -->
    <link rel="stylesheet" href="admin/themify/themify-icons.css">

    <!-- Waves css -->
    <link rel="stylesheet" href="admin/plugins/css/waves.min.css">

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.18/jquery-ui.min.js"></script> 
        <script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?sensor=false"></script>
        <link rel="stylesheet" href="maps/css/jquery-ui-1.8.18.custom.css"/>
        <script type="text/javascript">
            var map;
            var geocoder;
            function initialize()
            {
                var myLatlong   =   new google.maps.LatLng(9.9312328, 76.2673041);
                var myOptions   =   {
                                        zoom:8,
                                        center:myLatlong,
                                        mapTypeId:google.maps.MapTypeId.ROADMAP
                                    };
               map          =   new google.maps.Map(document.getElementById('map_canvas'),myOptions);
               geocoder      =   new google.maps.Geocoder();   
            }
            
          $(document).ready(function(){
              $("#autocomplete").autocomplete({
                  source:function(request,response){
                      geocoder.geocode({'address':request.term},function(results){
                          response($.map(results,function(item){
                              return {
                                 label:item.formatted_address,
                                 value:item.formatted_address,
                                 latitude:item.geometry.location.lat(),
                                 longitude:item.geometry.location.lng(),
                              }
                              
                          }))
                      })
                 },
                  select:function(event,ui) {
                    var location    =   new google.maps.LatLng(ui.item.latitude,ui.item.longitude);
                    marker          =   new google.maps.Marker({
                        map:map,
                        draggable:true
                    })
                   var stringvalue     =   'latitude:<input type="text" value="'+ui.item.latitude+'" >Longitude:<input type="text" value="'+ui.item.longitude+'"><br/>';
                    $("#value").append(stringvalue);
                    marker.setPosition(location);
                    map.setCenter(location);
                    
                    
                }
                  
              })
          
            });
        </script>

    <title>v-will.org</title>
</head>
<?php foreach($users as $user)?>
<body onload="initialize()">
    <header class="main-navbar-header">
        <nav class="navbar navbar-expand-md navbar-dark fixed-top theme-color">
            <div class="menu-toggle-button">
                <a class="nav-link wave-effect" href="#sidebar" id="sidebarCollapse">
                    <span class="ti-menu"></span>
                </a>
            </div>
            <a class="navbar-brand text-dark" href="#sidebarCollapse">V-WILL</a>

            <ul class="navbar-nav ml-auto navbar-top-links">
                <li class="dropdown">
                    <a class="dropdown-toggle profile-pic text-dark" data-toggle="dropdown" href="#" aria-expanded="false"> <img src="<?php echo $user['AIMAGE']; ?>" alt="user-img" width="36" class="img-circle">
                        <b class="d-none d-sm-inline-block text-dark"><?php echo $user['ANAME']; ?></b></a>
                        <div id="overlay" onclick="off()"> 
                        <div class="row">
                          <div class="col-md-6 offset-md-3">
                            <div class="card text-center" style="margin-top:10rem;">
                            <div class="card-body">
                            <img src="<?php echo $user['AIMAGE']; ?>" width=250 height=250 class="img-circle">
                            
                                <h1 class="mt-1"><?php echo $user['ANAME']; ?></h1>
                                <p class="title"><?php echo $user['AADD']; ?></p>
                                <p><?php echo $user['AMOB']; ?></p>
                                <p><?php echo $user['AMAIL']; ?></p>
                                <div style="margin: 24px 0;">
                                    
                                </div>
                                
                             </div><!--/card body-->
                            </div><!--/card-->
                        </div><!--col--> 
                        </div><!--row--> 
                        </div><!--/Overlay--> 
                    <ul class="dropdown-menu dropdown-user">
                        <li>
                            <div class="dw-user-box">
                                <div class="u-img"><img src="<?php echo $user['AIMAGE']; ?>" width=100 height=100 alt="user"></div>
                                <div class="u-text">
                                <h4><?php echo $user['ANAME']; ?></h4>
                                    <p class="text-muted"><?php echo $user['AMAIL']; ?></p>
                                    <button class="btn btn-rounded btn-danger btn-sm" onclick="on()">View Profile</button></div>
                            </div>
                        </li>
                        <div class="dropdown-divider"></div>
                        <li><a href="profile.php"><i class="ti-user"></i> Update My Profile</a></li>
                        <li><a href="a_password.php"><i class="ti-key"></i> Change Password</a></li>
                        <li><a href="a_inbox.php"><i class="ti-email"></i> Inbox</a></li>
                        <div class="dropdown-divider"></div>
                        <li><a href="logout.php"><i class="fa fa-power-off"></i> Logout</a></li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
        </nav>
    </header>
    <div class="wrapper">
        <!-- Sidebar Holder -->
        <nav id="sidebar" class="nav-sidebar">
            <ul class="list-unstyled components slimescroll-id" id="accordion">
                <!--<div class="user-profile">
                    <div class="dropdown user-pro-body">
                        <div><img src="https://placehold.it/300x300" alt="user-img" class="img-circle"></div>
                        <a href="#" class="dropdown-toggle u-dropdown" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Full Name </a>
                        <ul class="dropdown-menu">
                            <li><a href="#"><i class="ti-user"></i> My Profile</a></li>
                            <li><a href="#"><i class="ti-wallet"></i> My Balance</a></li>
                            <li><a href="#"><i class="ti-email"></i> Inbox</a></li>
                            <div class="dropdown-divider"></div>
                            <li><a href="#"><i class="ti-settings"></i> Account Setting</a></li>
                            <div class="dropdown-divider"></div>
                            <li><a href="login.html"><i class="fa fa-power-off"></i> Logout</a></li>
                        </ul>
                    </div>
                </div>-->

                <li>
                    <a href="admin.php" class="wave-effect">
                        <i class="ti-home m-r-10"></i> Home
                    </a>
                 </li>

                <li>
                    <a href="add_post.php" class=" wave-effect">
                    <i class="ti-pencil-alt m-r-10"></i>Add New Post</a>
                </li>
                <li>
                    <a href="view_post.php" class=" wave-effect">
                    <i class="ti-user m-r-10"></i>View Post</a>
                </li>
                
                <li>
                    <a href="view_joins.php" class=" wave-effect">
                    <i class="ti-thumb-up m-r-10"></i>View Joins</a>
                </li>
                 
                <li>
                    <a href="a_delete.php" class=" wave-effect">
                    <i class="ti-pencil m-r-10"></i>Delete Post</a>
                </li>
                
                <li>
                    <a href="add_comp.php" class=" wave-effect">
                    <i class="ti-medall m-r-10"></i>Add Completes</a>
                </li>
            </ul>
        </nav>

        <div class="container content-area">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel mt-5 pb-5 pt-2">
                          <div class="container mt-5">
                          <input type="text" id="autocomplete">
                            <div id="map_canvas" style="width:500px;height:500px;">
                            
                            </div>
                            
                            <div id="value">
                                
                            </div>
                          
                          </div>
                     </div>
                 </div>
            
             </div> 
               
         </div>
     </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="admin/js/jquery-3.2.1.slim.min.js"></script>
    <script src="admin/js/popper.min.js"></script>
    <script src="admin/js/bootstrap.min.js"></script>
    <script src="admin/plugins/js/jquery.slimscroll.min.js"></script>
    <script src="admin/plugins/js/waves.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#sidebarCollapse').on('click', function() {
                $('#sidebar').toggleClass('active');
            });
            Waves.init();
            Waves.attach('.wave-effect', ['waves-button']);
            Waves.attach('.wave-effect-float', ['waves-button', 'waves-float']);
        });
        $(function() {
            $('.slimescroll-id').slimScroll({
                border: 'none'
                height: '100vh'
            });
        });
    </script>

<script>
function triggerclick()
{
    document.querySelector('#postImage').click();
}
function displayImage(e)
{
    if(e.files[0])
    {
        var reader=new FileReader();
        reader.onload=function(e){
            document.querySelector('#postDisplay').setAttribute('src',e.target.result);
        }
        reader.readAsDataURL(e.files[0]);
    }

}
</script>
<script>
function on() {
  document.getElementById("overlay").style.display = "block";
}

function off() {
  document.getElementById("overlay").style.display = "none";
}
</script>

  
</body>

</html>