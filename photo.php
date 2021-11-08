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
                <li class="nav-item"><a class="nav-link " href="">Profile photo</a></li>
                <li class="nav-item"><a class="nav-link " href="password.php">Password</a></li>
                <li class="nav-item"><a class="nav-link " href="logout.php">Logout</a></li>
               
                </ul>
            </div>
        </div>
    </div>
</nav>
            
	
               <section class="user-profile">

               <?php if ($data->photo!=NULL) :?>
                <img src="media/users/<?php echo $data->photo ; ?>" alt="">

                <?php  elseif( $data->gender == 'male'): ?>
       <img class= "shadow" src="media/users/male.jpg" alt="">
       
       <?php elseif (  $data->gender  =='female' ) :?>
        <img class="shadow" src="media/users/female.jpg" alt="">

        <?php endif; ?>




       <h3 class="text-center py-2"><?php echo $data->name ;?></h3>
       <br>
            <?php
                    if(isset($_POST['Upload'])){
                        //get value//
                      $user_id = $_SESSION['id'];
                     

                      if( empty ($_FILES['photo']['name'])){
                    setmsg('warning','Please Insert a photo');

                     header('location:photo.php');

                      }else{
                        $file= move ($_FILES['photo'], 'media/users/');
                      update("UPDATE users SET photo='$file' Where id ='$user_id'");

                      setmsg('success','Profile photo is successfully updated');

                      header('location:photo.php');
                      }
                     
                    }
                    getmsg('warning');
                    getmsg('success');

                   
            ?>
        <div class="card shadow ">
                <div class="card-body">
               <form action="" method="Post" enctype="multipart/form-data">
                <input type="file" name="photo">
                <input type="submit" value="Upload" name="Upload" class="bg-success">
            </form>
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