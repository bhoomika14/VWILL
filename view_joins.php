<?php
   session_start();
   include("database.php");
   function countRecord($sql,$db)
   {
       $res=$db->query($sql);
       return $res->num_rows;
   }
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
    $sql="SELECT * FROM vjoin";
    $res=$db->query($sql);
    $vol=mysqli_fetch_all($res,MYSQLI_ASSOC);
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


    <title>v-will.org</title>
</head>
<?php foreach($users as $user)?>
<body>
    <header class="main-navbar-header">
        <nav class="navbar navbar-expand-md navbar-dark fixed-top theme-color">
            <div class="menu-toggle-button">
                <a class="nav-link wave-effect" href="admin.php" id="sidebarCollapse">
                    <span class="ti-menu"></span>
                </a>
            </div>
            <a class="navbar-brand text-dark" href="#sidebarCollapse">V-WILL</a>

            <ul class="navbar-nav ml-auto navbar-top-links">
                <li class="dropdown">
                    <a class="dropdown-toggle profile-pic text-dark" data-toggle="dropdown" href="#" aria-expanded="false"><img src="<?php echo $user['AIMAGE']; ?>" alt="user-img" width="36" class="img-circle">
                        <b class="d-none d-sm-inline-block text-dark"><?php echo $user['ANAME']; ?> </b></a>
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
                                <div class="u-img"><img src="<?php echo $user['AIMAGE']; ?>" alt="user" width=100 height=100></div>
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
                
                <li>
                    <a href="a_contact.php" class=" wave-effect">
                    <i class="ti-email m-r-10"></i>Contact</a>
                </li>
            </ul>
        </nav>

        <!--Tables-->
      <div class="container content-area">
                 <div class="panel mt-5">
                     <h3>Total Joined Volunteers  : <?php echo countRecord("SELECT * FROM vjoin",$db);?> </h3>
                     <?php $count=countRecord("SELECT * FROM vjoin",$db)/10;?>
                     <!--<form>
                        <div class="form-group col-md-4 ml-auto">
                        <label for="sel1">Select Range to Display Records</label>
                        <select class="form-control" id="sel1">
                            <option class="disable">---SELECT---</option>
                            <option <?php echo countRecord("SELECT * FROM vjoin LIMIT 0,10",$db);?>>1-10</option>
                            <option <?php echo countRecord("SELECT * FROM vjoin LIMIT 11,20",$db);?>>11-20</option>
                            <option <?php echo countRecord("SELECT * FROM vjoin LIMIT 21,30",$db);?>>21-30</option>
                            <option <?php echo ("SELECT * FROM vjoin");?>>All</option>
                        </select>
                        </div>
                     </form>--> 
                    <?php
                            $sql="SELECT users.UNAME, post.PTITLE, vjoin.LOGS FROM vjoin INNER JOIN post on post.PID=vjoin.PID INNER JOIN users ON vjoin.ID = users.UID ORDER BY vjoin.VID DESC LIMIT 0,10";
                            $res=$db->query($sql);
                            if ($res->num_rows>0)
                            {
                               echo "<div class='table-responsive'>";
                               echo "<table class='table table-hover w-100'>";

                        
                                echo "<thead>";
                                echo "<tr>";
                                echo "<th>#</th>";
                                echo "<th>Volunteer</th>";
                                echo "<th>Post Title</th>";
                                echo "<th>Time</th>";
                                echo "</tr>";
                                echo "</thead>";
                                $i=0;
                                while($row=$res->fetch_assoc())
                                {
                                    $i++;
                                   
                                     echo "<tbody>";
                                
                                    echo "<tr>";
                                    
                                    echo "<td>{$i}</td>";
                                    echo "<td>{$row["UNAME"]}</td>";
                                    echo "<td>{$row["PTITLE"]}</td>";
                                    echo"<td>{$row["LOGS"]}</td>";
                                    echo "</tr>";
                                
                                    echo "</tbody>";
                                }
                                
                                echo "</table>";

                            }
                            else{
                                echo "Volunteeers are on their way to join the activity!";
                            }
                            ?>
                         <br>
                         <?php foreach($vol as $vols) : ?>
                         <form action="<?php echo $_SERVER["REQUEST_URI"];?>">
                            <a href='v_del.php?id=<?php echo $vols['VID']; ?>' type='button' class='btn btn-outline-danger col-md-4' id='btn-del'>Delete Records</a>
                        </form>
                         <?php endforeach;?>
                 </div><!--/panel--> 
             
      </div><!--?container-->
     </div><!--/wrapper-->
     <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

    <script src="admin/js/jquery-3.2.1.slim.min.js"></script>
    <script src="admin/js/popper.min.js"></script>
    <script src="admin/js/bootstrap.min.js"></script>
    <script src="admin/plugins/js/jquery.slimscroll.min.js"></script>
    <script src="admin/plugins/js/waves.min.js"></script>
    <script src="sweetalert\jquery-3.4.1.min.js"></script>
	<script src="sweetalert\sweetalert2.all.min.js"></script>
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
    <script type="text/javascript">
	$(document).ready(function(){
		$("#limit-records").change(function(){
			$('form').submit();
		})
	})
    </script>
    <script>
function on() {
  document.getElementById("overlay").style.display = "block";
}

function off() {
  document.getElementById("overlay").style.display = "none";
}
</script>
             <script>
				 $('#btn-del').on('click', function(e){
					 e.preventDefault();
					 const href=$(this).attr('href')
					 Swal.fire({
						 title: 'Are you sure?',
						 text: 'Record will be deleted permenantely!',
						 type: 'warning',
						 showCancelButton: true,
						 confirmButtonColor: '#3085d6',
						 cancelButtonColor: '#d33',
						 confirmButtonText: 'Delete Record',
					 }).then((result)=>{
						 if(result.value){
							 document.location.href="v_del.php?id";
						 }
					 })
				 })
			 </script>
</body>
</html>