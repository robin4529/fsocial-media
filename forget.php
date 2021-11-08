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
	<title>forget password</title>
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
                <li class="nav-item"><a class="nav-link " href="">Profile photo</a></li>
                <li class="nav-item"><a class="nav-link " href="password.php">Password</a></li>
                <li class="nav-item"><a class="nav-link " href="logout.php">Logout</a></li>
               
                </ul>
            </div>
        </div>
    </div>
</nav>
            <div class="container">
               <div class="row">
                   <div class="col-md-4">
                       <div class="card">
                           <div class="card-body">
                               <h6>Forgot password</h6>
                               <p>Email</p>
                               <input type="text" placeholder="Enter your email">
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