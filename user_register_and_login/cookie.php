<?php 
if(isset($_COOKIE["names"]) && isset($_COOKIE["passwords"])){
	header("location:Home.php");

}
else
{
     //   header("location:user_login.php");
}

?>