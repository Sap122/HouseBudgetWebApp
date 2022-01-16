

<DOCTYPE>
<html>

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<head>
<title>Household Budget Management</title>
<h1>Household Budget Management</h1>
<link rel="stylesheet" href="register_css.css">
<script type="text/javascript" src="newregister.js"></script>

<style>

.cancel{ height: 70px;
    margin-left: 20px;
    margin-top: -100px
}
</style>
</head>

<body>
<a href="welcome.php"><input type="image" src="img/cancel.png" class="cancel"></a>

<div class="container">
<! name,password,email id and monthly income image >
<div class="info">
<table><tr><br>
<tr><td><input type="image" onClick="playAudioName()" src="img/name.png" class="btn" onclick="user()">
<br><br><br>
<tr><td><input type="image" onClick="playAudioPassword()"  src="img/password.png" class="btn">
<br><br><br>
<tr><td><input type="image" onClick="playAudioEmail()"  src="img/email.png"  class="btn">
<br><br><br>
<tr><td><input type="image" onClick="playAudioIncome()"  src="img/income.png" class="btn"></table></div>

<! input type for name,password,email id and income >
<div class="Form">
<table>
<form method="post"  action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
<tr><td><p class="f">Name</p><input type="text" name="u_name" class="col-25" id="user_name" required>
<br><br><br>
<tr><td><p class="f">Password</p></label><input type="password"  name="u_pass" class="col-25" id="password" value="default"  required>
<br><br><br>
<tr><td><p class="f">Email Id(Optional)</p></label><input type="text" name="u_email" class="col-25" id="email" >
<select name="mail" id="mail">
<option>@gmail.com </option>
<option>@yahoo.com </option>
<option>@Outlook.com </option>
<option>@hotmail.com </option>
</select>
<br>
<tr><td><p class="f">Monthly Income(Optional)</p><input type="number" name="u_income" class="col-25" id="income" min=0>
<br><br>
<tr><td><input type="image" name="ok"  id="home" onclick="check()" class="submit"  src="https://image.freepik.com/free-vector/correct-sign-right-mark-icon-set-green-tick-flat-symbol-check-ok-yes-marks-vote-decision_473851-126.jpg" >
</form></table></div>

<! mic button setup >
<div class="mic">
<table><tr><br>
<tr><td><input type="image" src="img/mic2.png" class="bt" onclick="runSpeechRecognition()">
<br><br><br>
<tr><td><input type="image" src="img/mic2.png" class="bt" onclick="runSpeechRecognition1()">
<br><br><br>
<tr><td><input type="image" src="img/mic2.png" class="bt" onclick="runSpeechRecognition2()">
<br><br><br>>
<tr><td><input type="image" src="img/mic2.png" class="bt" onclick="runSpeechRecognition3()">
</div>
</div>
</body>
</html>


<?php

$date = date("y/m/d");
$name = "";
$email = "";
$password = "";
$income = "";
$var = "";

$mail = "";
$mail_id = "";

$ErrMsg = "";

if (($_SERVER["REQUEST_METHOD"] == "POST")) {
  $name = ($_POST["u_name"]);
  $password = ($_POST["u_pass"]);
  $email = ($_POST["u_email"]);
  $income =(int) ($_POST["u_income"]);
  $mail = ($_POST["mail"]);
}

$mail_id = $email.$mail;

$newname = str_replace(" ","",$name);
$newpassword = str_replace(" ","",$password);

//name validation-------------------------------------------------

 if (! preg_match ("/^[a-zA-z]*$/", $name) ) {
  $ErrMsg = "error";
   } 



// if null and spaces not allowed

if($newname != "" && $newpassword != "")
{
$host = "localhost";
$user = "root";
$pass = "";

$db = "user_detail";
$conn = mysqli_connect($host,$user,$pass,$db);
if($conn === false){
    die(" ");
}
else{
    echo(" ");
}


$insertRecordQuery = "INSERT INTO user_table (user_name,user_password,user_email,user_monthly_income,user_login_date) VALUES ('$name','$password','$mail_id','$income','$date')";
$password_value =$password;
if(mysqli_query($conn, $insertRecordQuery)){
   echo "succesfully";
     // setcookie('name',"$name",time()+3600*24*365,'/', null, null, true);
       //setcookie('pass',"$password",time()+3600*24*365,'/', null, null, true); 
       header("location:user_login.php");
   
}
else{
    
    $var ="password_repeat";
}

$closeConnection = mysqli_close($conn);
}
?>

//<! when login failed login is failed voice play automatically>
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


//password verification----------------------------------
   
var jsvar1 = '<?=$password_value?>';
   if(jsvar1 =="default" || jsvar1 =="")
    {}
  else
  {
    a="password_repeat";
    var jsvar = '<?=$var?>';    
  if(a == jsvar)
    {  
    //password same is not valid
      let msg = "नया पासवर्ड डालिये यह पासवर्ड पहले से उपलब्ध है ";
                
                let speech = new SpeechSynthesisUtterance();
                speech.lang = "hi-IN";
                
                speech.text = msg;
                speech.volume = 1;
                speech.rate = 1;
                speech.pitch = 1;
                
                window.speechSynthesis.speak(speech);

     }
  }



function check() {
 
  var x1 = document.getElementById("income").value;

  
 if( x1 < 0 )    
{  
  
            //    alert();
                let msg = "नंबर  गलत है  ";
                
                let speech = new SpeechSynthesisUtterance();
                speech.lang = "hi-IN";
                
                speech.text = msg;
                speech.volume = 1;
                speech.rate = 1;
                speech.pitch = 1;
                
                window.speechSynthesis.speak(speech);      
  }
}

</script>


