<?php
 setcookie('names',"$name",time()-1,'/', null, null, true);
    setcookie('passwords',"$password",time()-1,'/', null, null, true); 
header("location:user_login.php");
 
?>