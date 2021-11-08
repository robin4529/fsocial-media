<?php require_once "autoload.php";

//auth user login//


if( uselog() == false){
    header('location:index.php');
}else{
    $data = userloginData('users',$_SESSION['id']);
    
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php echo  $data->name; ?></title>
	<!-- ALL CSS FILES  -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/style.css">
	<link rel="stylesheet" href="assets/css/responsive.css">
    
</head>
<body>
<nav class="profile-menu" >
    <div class="container">
        <div class="row">
        <div class="col-md-8 offset-2 ">
            <ul class="nav nav-tab d-flex justify-content-center ">
                <li class="nav-item"><a class="nav-link " href="profile.php">Profile</a></li>
                <li class="nav-item"><a class="nav-link " href="edit.php">Edit</a></li>
                <li class="nav-item"><a class="nav-link " href="friend.php">friends</a></li>
                <li class="nav-item"><a class="nav-link " href="photo.php">Profile photo</a></li>
                <li class="nav-item"><a class="nav-link " href="password.php">Password</a></li>
                <li class="nav-item"><a class="nav-link " href="logout.php">Logout</a></li>
               
                </ul>
            </div>
        </div>
    </div>
</nav>
    <div class="wrap">
        <div class="row">
            <?php
                if(isset($_POST['submitpass'])){
                        //get value//
                        $Opass = $_POST['Opass'];
                        $Npass = $_POST ['npass'];
                        $Cpass = $_POST ['cpass'];

                        $hash_pass =gethash($Npass);

                        //validatitation//
                        if(empty($Opass)|| empty($Npass)|| empty($Cpass)){
                            $msg= msgShow("All fields are Require");

                        }else if( $Npass != $Cpass ){
                                $msg = msgShow("New password is doesnt match try again",'warning');
                        }else if(password_verify($Opass, $user_email_data->password)){
                                $msg= msgShow("You Put Wrong old password",'Danger');
                        }else{
                            update("UPDATE users SET password='$hash_pass' WHERE id =' $data->id'");
                            session_destroy();
                            header("location:index.php");
                        }
                }
            ?>
            <div class="col-md-12">
            <div class="card shadow">
               <div class="card-body">
                   <h4>Changed Your Password</h4>
                   <?php
                        if(isset($msg)){
                            echo $msg;
                        }
                   ?>

                   <hr>
                   <form action="" method="Post">
                       <div class="form-group">
                           <input name="Opass" class="form-control" type="password" placeholder=" old password" >
                       </div>
                       <div class="form-group">
                           <input name="npass" class="form-control" type="password" placeholder=" New password" >
                       </div>
                       <div class="form-group">
                           <input  name="cpass" class="form-control" type="password" placeholder=" Confirm password" >
                       </div>
                       <input  name="submitpass" class="btn btn-primary" type="submit" value="Changed Password">
                   </form>
                </div>
            </div>
        </div>
    </div>
    </div>
            
	
             

	<!-- JS FILES  -->
    <script src="assets/js/jquery-3.2.1.slim.min.js"></script>
	<script src="assets/js/popper.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/custom.js"></script>
</body>
</html>