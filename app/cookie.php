<?php
        //set cookie msg //
        function setmsg($type, $msg){
            setcookie( $type, $msg , time() +2);
        }

        // show cookie msg //
        function getmsg($type){
           
             if(isset($_COOKIE[$type])){
                echo "<p class=\"alert alert-{$type}\">{$_COOKIE[$type]}<button class=\"close\" data-dismiss=\"alert\">&times;</button></p>";
            }
        }
?>
