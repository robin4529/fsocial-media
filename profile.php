<?php require_once "autoload.php";

//auth user login//


if( uselog() == false){
    header('location:index.php');

}else{
    if ( isset ($_GET['user_id'])){
    $data = userloginData('users',  $_GET['user_id']);
}else{
    $data = userloginData('users',  $_SESSION['id']);
}
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
                <li class="nav-item"><a class="nav-link " href="">Profile</a></li>
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
	
               <section class="user-profile">

            
               <?php if ( $data->photo!=NULL) :?>
                <img src="media/users/<?php echo $data->photo ; ?>" alt="">

                <?php  elseif( $data->gender == 'male'): ?>
       <img class= "shadow" src="media/users/male.jpg" alt="">
       
       <?php elseif (  $data->gender  =='female' ) :?>
        <img class="shadow" src="media/users/female.jpg" alt="">

        <?php endif; ?>

       <h3 class="text-center py-2"><?php echo $data->name ;?></h3>
       <div class="card shadow">
           <div class="card-body">
               <table class="table table-striped">
                  <tr>
                      <td>Name</td>
                      <td><?php echo $data->name ; ?></td>
                  </tr>
                  <tr>
                      <td>Email</td>
                      <td><?php echo $data->email ; ?></td>
                  </tr>
                  <tr>
                      <td>cell</td>
                      <td><?php echo $data->cell; ?></td>
                  </tr>
                    
                  <tr>
                  <?php if( $data->age !=NULL ) : ?>
                        <td>Age</td>
                        <td><?php echo $data->age ; ?></td>
                  </tr>
                  <?php endif; ?>
                    

                  <tr>
                  <?php if( $data->edu !=NULL) : ?>
                  
                      <td>Education</td>
                      <td><?php echo $data->edu ; ?></td>
                  </tr>
                  <?php endif; ?>
                 
                  <tr>
                      <td>gender</td>
                      <td><?php echo $data->gender ; ?></td>
                  </tr>
               </table>
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