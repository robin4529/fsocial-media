
<?php require_once "autoload.php";
 

//recent  to profile page jump//
if(isset($_GET['recent_login_id'])){
		$login_user_id	= $_GET['recent_login_id'];
		setcookie('login_users_cookie_id',$login_user_id, time() + ( 60 * 60 * 24 * 365 * 5 ));
		header('location:index.php');
}




//Recent cookie data manage//
if(isset($_GET['rlc_id'])){
	 echo $rlc_id	= $_GET['rlc_id'];

	 $rl_arr=json_decode($_COOKIE['recent_login_id']);
	 	$rlc_arr =array_unique(  $rl_arr);

		 $index = array_search($rlc_id,$rlc_arr);

		$rlu_r =array_splice( $rlc_arr, $index, 1 );

		if(count($rlc_arr) >0){
			
			setcookie('recent_login_id', json_encode($rlc_arr), time()+ (60 * 60 * 24 * 7 * 365));

		}else{
			setcookie('recent_login_id', '', time() - (60 * 60 * 24 * 7 * 365));
		}

		
		header('location:index.php');

		
	 
}
//end of recent cookie data manage//

if( uselog()== true){
    header('location:profile.php');
}
if(isset($_COOKIE['login_users_cookie_id'])){
		$login_users_cookie_id =$_COOKIE['login_users_cookie_id'];
		$_SESSION['id'] = $login_users_cookie_id;
	header('location:profile.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Development Area</title>
	<!-- ALL CSS FILES  -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/style.css">
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="assets/css/responsive.css">
</head>
<body>
<?php 
        if(isset($_POST['login'])){
            echo $email=$_POST['email'];
            echo $pass=$_POST['pass'];
            if(empty($email)||empty($pass)){
                $msg=msgShow('All Fields are Required','danger');
            } 
            else{
                $login_users =emailAuth('users','email',$email);
                if( $login_users!==false){
						
						if(password_verify($pass, $login_users->password)){

							$_SESSION['id'] =  $login_users->id;

							setcookie( 'login_users_cookie_id', $login_users->id , time() + ( 60 * 60 * 24 * 7 * 365));
							
							/*$_SESSION['name'] = $user_email_data->name;
							$_SESSION['email'] = $user_email_data->email;
							$_SESSION['cell'] = $user_email_data->cell;
							$_SESSION['gender'] = $user_email_data->gender;
							$_SESSION['photo'] = $user_email_data->photo;*/



						header('location:profile.php');
						}else{
							$msg=msgShow('Wrong password','danger');
						}
                } else{
                    $msg=msgShow('Invalid Email address','danger');
                }
                
            }
        }
    ?>
	
	<div class="wrap shadow-sm" >
	
		<div class="row">
			<div class="col-md-12">

			<div class="card">
			<div class="card-body">
				<h2>Login your account</h2>
					<?php 
					if(isset($msg))
					{
						echo $msg;
					}
					?>
				<hr>
				<form action="" autocomplete="off" method="post">
					<div class="form-group">
						<label for="">login info</label>
						<input  name="email" class="form-control" type="text" value="<?php old('email') ?>" placeholder="enter your email/cell/number">
					</div>
					
					<div class="form-group">
						<label for="">Passoword</label>
						<input name="pass" class="form-control" type="password" placeholder="enter your password">
					</div>
					<div class="form-group">
						<input name="login" class="btn btn-primary" type="submit" value="login">
					</div>
					</form>
				<hr>
					<a href="reg.php">Create an account</a>
					<div class="div">
					<p style="margin-left:200px; margin-top:-20px;">Do you forget password?
					<a href="forget.php">click here</a></p>
				</div>
				<br>
			</div>
		</div>
		</div>
		</div>
	
	</div>
			<div class="container">
				<div class="row">

					<?php 
						  if(isset($_COOKIE['recent_login_id'])):

							$recent_login_user_id =json_decode($_COOKIE['recent_login_id'],true);

							$user_id = implode(',', $recent_login_user_id);

							

							$sql="SELECT* FROM users WHERE id IN($user_id)";
							$data =connect()->query($sql);

						while(  $user =$data->fetch_object()):
					
					
					?>
				
					<div class="col-md-4">
						<div class="card">
							<div class="card-body rlc-div ">
								<a class="rlc"  href="?rlc_id=<?php echo $user->id;  ?>">&times;</a>
								<a href="?recent_login_id=<?php echo $user->id; ?>"><img src="media/users/<?php echo $user->photo;  ?>" alt="">
							<h5><?php echo $user->name ?></h5></a>
							</div>
						</div>
					</div>
					
					<?php endwhile; ?>
					<?php endif; ?>
					
				</div>
			</div>







	<!-- JS FILES  -->
	<script src="assets/js/jquery-3.2.1.slim.min.js"></script>
	<script src="assets/js/popper.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/custom.js"></script>
	<!-- //<h1><Apnere ekhon ami kilai?/h1> -->
</body>
</html>