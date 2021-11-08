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
    <div class="updated_data">
        <div class="row">
            <?php
           
                if(isset($_POST['upadted'])){
                    //get value//
                    echo $name = $_POST['name'];
                    echo $email = $_POST['email'];
                    echo $cell = $_POST['cell'];
                    echo $uname = $_POST['uname'];
                   echo  $age = $_POST['age'];
                    echo $edu = $_POST['edu'];
                    echo $gender = $_POST['gender'];
                    echo $updated_at = date('d-m-y h:m:s');
                    $user_id=$_SESSION['id'];

                    

                    //validation//
                    if(empty($name)||empty($email)||empty($cell)||empty($uname)||empty($gender)){
                            $msg = msgShow("All fields are Require");
                    }else{
                        update("UPDATE users SET name='$name',email='$email',cell='$cell',username='$uname',age='$age',edu='$edu',gender='$gender',updated_at='$updated_at' WHERE id='$user_id'");
                        setmsg('success','Your data updated successfully');
                       header("location:edit.php");

                      
                        
                    }
                    

               
            }
           
            ?>
            
            <div class="col-md-12">
            <div class="card shadow">
               <div class="card-body">
                   <h4>Please update your data</h4>
                   <?php
                      $msg = getmsg('success');
                        //if(isset($msg)){
                            //echo $msg;
                        
                       
                    ?>
                  
                   <hr>
                   <form action="" method="post">
                <div class="form-group">
                <label for="">Name</label>
                        <input name="name" type="text" class="form-control"  value="<?php echo  $data->name; ?>">
                     </div> 
                    <div class="form-group ">
                <label for="">Email</label >
                        <input  name="email" type="text" class="form-control" value="<?php echo  $data->email; ?>">
                    </div> 
                    <div class="form-group ">
                <label for="">cell</label> 
                        <input  name="cell" type="text" class="form-control"  value="<?php echo  $data->cell; ?>">
                    </div> 
                    <div class="form-group">
                            <label for="">User Name</label>
                            <input name="uname" type="text" name="uname" class="form-control" value="<?php echo  $data->username; ?>">
                        </div>
                    <div class="form-group">
                <label for="">Age</label>
                        <input name="age" type="text" class="form-control" value="<?php echo  $data->age; ?>"" >
                    </div>
                    <div class="form-group">
                <label for="">Education</label>
                        <input name="edu" type="text" class="form-control" value="<?php echo  $data->edu; ?>"" >
                    </div>
                    <div class="form-group">
                            <label for="">Gender</label>
                            <br>
                            <input type="radio" name="gender" <?php echo ( $data->gender=='male') ? 'checked' : '';?> value="male" id="male"><label for="male">Male</label>
                            <input type="radio" name="gender" <?php echo ( $data->gender=='female') ? 'checked' : '';?> value="female" id="female"><label for="female">Female</label>
                        </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-primary" value="Update your data" name="upadted">
                    </div>
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