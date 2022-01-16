
<?php
  include_once('cookie.php');
?>

<DOCTYPE>
<html> 
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
body{background-image: linear-gradient(to right top, #d16ba5, #c777b9, #ba83ca, #aa8fd8, #9a9ae1, #8aa7ec, #79b3f4, #69bff8, #52cffe, #41dfff, #46eefa, #5ffbf1);

}
h1{ color:black;
    font-family: cursive;
    font-weight: bold;}

.container{
    height: 40%;
    width: 30%;
    background-color: #E9E9E9;
    margin-top: 10%;
    margin-left: 30%;
    margin-right: 30%;
    opacity:0.8;
    border-radius:30px;
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
}
.filds{margin-left:140px;     
   
    height: 200px;
    width: 180px;
    margin-top:-10%;
}
.user_image{
    height: 50%;
    width: 25%;
    magin-bottom: 50%;
    margin-top: -150px;
    margin-left:10%;
}
.user_mic{margin-left:340px;
         
           height: 50%;
    width: 25%;
    magin-bottom: 50%;
    margin-top: -150px;}
.btn{
   height:50px;
   width:50px;
}
.ok{
    height:40px;
    width:80px;
    background-color:green;
    color:white;
    box-shadow:10px 10px 5px #aaaaaa; 
    border-radius:30px;
}

.cancel{ height: 70px;
 
}

</style>

<script type="text/javascript" src="login_js.js"></script>



</head>
<body>

<a href="welcome.php"><input type="image" src="img/cancel.png" class="cancel"></a>
<div class="container">
<h1 style="text-align:center">LOGIN</h1>
<div class="filds">
<form  method="post" name="loginform"   action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" >
<br><br><br>
name<input type="text" name="name" id="name" value="" required>
<br><br><br>
password<input type="password" name="pass" value=" "  id="password" required>
<br><br><br>
<input type="submit" name="submit" class="ok" onClick="window.location.reload();"  />

</form>

</div>
<div class="user_image">
<input type="image" class="btn" onclick="playAudioName()" src="img/name.png"><br><br><br>
<input type="image" class="btn" onclick="playAudioPassword()" src="img/password.png">
</div>
<div class="user_mic">
<input type="image" onClick="runSpeechRecognition_name()" class="btn" src="img/mic2.png"><br><br><br>
<input type="image" onClick="runSpeechRecognition_password()"  class="btn" src="img/mic2.png">
</div>
</div>
</body>
</html>

<?php
$name = "";
$password = "";
$n = "";
$var = "";
$ErrMsg = "";

if (isset($_POST['submit'])){
$name = $_POST["name"];
$password = $_POST["pass"];
}

//name validation-------------------------------------------------

 if (! preg_match ("/^[a-zA-z]*$/", $name) ) {
  $ErrMsg = "error";
   } 


//if $name is null  database not work

if($name != "" )
{

// database connection 
$host = "localhost";
$user = "root";
$pass = "";

$db = "user_detail";
$conn = mysqli_connect($host,$user,$pass,$db);
if($conn === false){
    die();
}
else{
    echo" ";
} 


//mysqli_select_db("user_detail",$conn);
$sql = "SELECT user_name FROM user_table WHERE user_password='$password'";

$result = $conn-> query($sql);
if($result-> num_rows > 0){
 while($row = $result->fetch_assoc()){
             $n = $row['user_name'];
}
}
else{ 
}


$a = "select * from user_table where user_password='$password' ";

$q = mysqli_query($conn, $a);
$count = mysqli_num_rows($q);


if($n == $name AND $count == 1){
          
    setcookie('names',"$name",time()+3600*24*365,'/', null, null, true);
    setcookie('passwords',"$password",time()+3600*24*365,'/', null, null, true); 
 }
else{
        //php variable to javascript
       $var = "invalid_user";
}


$conn-> close();
}
?>


<script>

//name validation---------------------------------------

 var jsvar = '<?=$ErrMsg?>';
if(jsvar == "error"){

 let msg = "सही नाम डालिये  ";
                
                let speech = new SpeechSynthesisUtterance();
                speech.lang = "hi-IN";
                
                speech.text = msg;
                speech.volume = 1;
                speech.rate = 1;
                speech.pitch = 1;
                
                window.speechSynthesis.speak(speech);
}



//password verification----------------------------------------
//<! when login failed login is failed voice play automatically>

    a="invalid_user";
    var jsvar = '<?=$var?>';
if(a == jsvar)
{
// alert(jsvar);
   let msg = "आपका पासवर्ड और यूजरनाम गलत है ";
                
                let speech = new SpeechSynthesisUtterance();
                speech.lang = "hi-IN";
                
                speech.text = msg;
                speech.volume = 1;
                speech.rate = 1;
                speech.pitch = 1;
                
                window.speechSynthesis.speak(speech);
}
</script>


<?php
//cookie
//cookie
/*if (isset($_COOKIE["names"])){
     $n = $_COOKIE["names"];
     echo "<script>
     document.getElementById('name').value = '$n';
     </script>" ;}
else{echo "";}

if(isset($_COOKIE["passwords"])){
     $m = $_COOKIE["passwords"];
     echo "<script>
     document.getElementById('password').value = '$m';
     </script>" ;}
else{echo "" ;}*/

?>

