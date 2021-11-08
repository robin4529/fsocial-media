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
        <section class="users">
            <div class="container">
                <div class="row">
                    <?php
                       $all_users =all('users');

                       while( $user_data =$all_users->fetch_object() ) :
                    ?>
                    <?php
                        if( $user_data->id != $_SESSION['id']) :
                     ?>
                    <div class="col-md-3 ">
                        <div class="user-item">
                            <div class="card ">
                                <div class="card-body">
                                    <img src="media/users/<?php echo $user_data->photo;  ?>" alt="">
                                    <h4><?php echo $user_data->name ;?></h4>
                                    <br>
                                    <a class="view-profile btn-primary" href="profile.php?user_id=<?php echo $user_data->id; ?>">View Profile</a>
                                </div>
                            </div>

                        </div>
                    </div>
                    <?php  endif; ?>
                        <?php endwhile; ?>

                    </div>
                </div>
            </div>
        </section>
            
	





	<!-- JS FILES  -->
	<script src="assets/js/jquery-3.2.1.slim.min.js"></script>
	<script src="assets/js/popper.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/custom.js"></script>
</body>
</html>