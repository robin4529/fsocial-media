<?php

    //session destroy system//

    session_start();
    session_destroy();

   $logout_user_id =$_SESSION['id'];

   if(isset($_COOKIE['recent_login_id'])){
           $old_data =json_decode($_COOKIE['recent_login_id']);
           array_push( $old_data,  $logout_user_id );
           setcookie('recent_login_id', json_encode( $old_data), time() + ( 60 * 60 * 24 * 365 * 7));

   }else{
       $arr = [];
       array_push(  $arr, $logout_user_id );
       setcookie('recent_login_id', json_encode($arr), time() + ( 60 * 60 * 24 * 365 * 7));
   }




    setcookie('login_users_cookie_id', $login_users->id , time() -( 60 * 60 * 24 * 365 * 7));

    header("location: index.php");
    




 ?>