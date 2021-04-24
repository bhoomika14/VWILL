<?php
   session_start();
   include("database.php");
  
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!--<meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">--> 

    <!-- Title Page-->
    <title>v-will.org</title>

    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
    <link rel="stylesheet" href="admin/themify/themify-icons.css">

    <!-- Main CSS-->
    <link href="registration/css/main.css" rel="stylesheet" media="all">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>

<body>
 <?php
     if(isset($_POST['submit']))
 {
        $target_dir="avatars/";
        $target_file=$target_dir.basename($_FILES["profileImage"] ["name"]);
        if(move_uploaded_file($_FILES["profileImage"] ["tmp_name"],$target_file))
     {
       $sql="INSERT INTO users(UIMAGE,UNAME,UADD,UMOB,UMAIL,UPASS)VALUES('{$target_file}', '{$_POST['uname']}', '{$_POST['uadd']}', '{$_POST['umob']}', '{$_POST['umail']}', '{$_POST['upass']}')";
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
 }

?>    
    <div class="page-wrapper bg-green p-t-60 p-b-40">
        <div class="wrapper wrapper--w900">
            <div class="card card-6">
                <div class="card-heading">
                    <h2 class="title" style="color:white;">Welcome!</h2>
                </div>
                <div class="card-body">

                
                    <form action="register.php" method="POST" enctype="multipart/form-data">
                    <div class="form-row">
                            <h3 class="name">Profile Image<sup class="error">*</sup></h3>
                            <div class="value validate-input">
                                <div class="input-group js-input-file">
                                <img src="images/avatar.png" onclick="triggerClick()" id="profileDisplay" width=100 height=100>
                                <label for="profileImage"></label>
                                    <input type="file" name="profileImage" onchange="displayImage(this)" id="profileImage">
                                    <!--<span class="input-file__info">No file chosen</span>-->
                                </div>
                                <div class="label--desc">Upload your image of file type .jpg, .jpeg, .png  </div>
                                
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Name<sup class="error">*</div>
                            <div class="value validate-input" data-validate="Valid name is required">
                                <input class="input--style-6" type="text" name="uname" placeholder="your name(alphabets Only)" required pattern="^[A-Za-z ]+$" title="Please enter alphabets only" autocomplete="off">
                                
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Address<sup class="error">*</sup></div>
                            <div class="value">
                                <div class="input-group validate-input" data-validate="Valid address is required">
                                    <textarea class="textarea--style-6" name="uadd" placeholder="your address in Mangalore" required autocomplete="off"></textarea>
                                   
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Contact Number<sup class="error">*</div>
                            <div class="value validate-input">
                                <input class="input--style-6" type="text" name="umob" placeholder="your mobile number(numbers only)" required maxlength="10" pattern="[6-9]{1}[0-9]{9}" title="Please enter numbers only" autocomplete="off">
                                
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Email address<sup class="error">*</div>
                            <div class="value">
                                <div class="input-group validate-input" data-validate="Valid email is required: example@email.com">
                                    <input class="input--style-6" type="email" name="umail" placeholder="example@email.com" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" title="Please enter valid email-id" autocomplete="off">
                                    
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Enter Password<sup class="error">*</div>
                            <div class="value">
                                <div class="input-group validate-input" data-validate="Password is required">
                                    <input class="input--style-6" type="password" name="upass" id="myInput" required autocomplete="off">  
                                    <label class="container">Show Password
                                        <input type="checkbox" onclick="myFunction()">
                                        <span class="checkmark"></span>
                                     </label>
                                 </div>          
                            </div> 
                        </div>
                       
                        <div class="form-row">
                            <div class="name">Re-Enter<sup class="error">*</div>
                             <div class="value">
                                 <div class="input-group validate-input" data-validate="Same Password is required">
                                    <input class="input--style-6" type="password" name="upass" id="myInput1" required autocomplete="off">
                                    <label class="container">Show Password
                                        <input type="checkbox" onclick="myFunction1()">
                                        <span class="checkmark"></span>
                                     </label>
                                 </div> 
                            </div>
                        </div>
                       
                        <!--<div class="form-row">
                            <div class="name">Upload CV</div>
                            <div class="value">
                                <div class="input-group js-input-file">
                                    <input class="input-file" type="file" name="file_cv" id="file">
                                    <label class="label--file" for="file">Choose file</label>
                                    <span class="input-file__info">No file chosen</span>
                                </div>
                                <div class="label--desc">Upload your CV/Resume or any other relevant file. Max file size 50 MB</div>
                            </div>
                        </div>-->
                    
                </div>
                <div class="card-footer">
                    <button type="submit" name="submit" class="btn btn--radius-2 btn--green">Send Application</button>
                    <button type="reset" class="btn btn--radius-2 btn--blue">Reset</button>
                    
                </div>
                
            </form>
            
            </div>
        </div>
    </div>
    
    <!-- Jquery JS-->
    <script src="registration/vendor/jquery/jquery.min.js"></script>


    <!-- Main JS-->
    <script src="registration/js/global.js"></script>

    <script src="registration/js/script.js"></script>

    <script>
        function myFunction() {
        var x = document.getElementById("myInput");
        if (x.type === "password") {
            x.type = "text";
        } else {
            x.type = "password";
        }
        }
     </script>
     <script>
        function myFunction1() {
        var x = document.getElementById("myInput1");
        if (x.type === "password") {
            x.type = "text";
        } else {
            x.type = "password";
        }
        }
     </script>
     <script>
         var password = document.getElementById("myInput"), confirm_password = document.getElementById("myInput1");

            function validatePassword(){
            if(password.value != confirm_password.value) {
                confirm_password.setCustomValidity("Passwords Don't Match");
            } else {
                confirm_password.setCustomValidity('');
            }
            }

            password.onchange = validatePassword;
            confirm_password.onkeyup = validatePassword;
     </script>


</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->