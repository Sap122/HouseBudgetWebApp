<DOCTYPE>
<head>
<style>

body{
    background-image: linear-gradient(-225deg, #E3FDF5 0%, #FFE6FA 100%);
    background-image: linear-gradient(to top, #a8edea 0%, #fed6e3 100%);
    background-attachment: fixed;
}
   div{ height: 500px;
    width: 400px;
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    margin-left: 35%;
    margin-top: 35px; 
    border-radius:30px;
    background-image: linear-gradient(-225deg, #E3FDF5 50%, #FFE6FA 50%);
}
.logo{
       height:180px;
       width:300px;
       margin-left:45px;
}
h1{text-align:center;
   font-family: cursive;
   color:black;}
.input{margin-left:60px;
       width:300px;
       height:50px;
       border-radius:10px;}
button{margin-left:150px;
       height:40px;
       width:100px;
       border-radius:10px;
       background-color:green;
       color:white;
       font-size:20px;}

</style>
</head>
<body>
<a href="welcome.php"><input type="image" src="img/cancel.png" style="height:50px"></a>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
<div>
<input type="image" class="logo" src="https://budget.preparamom.com/wp-content/uploads/2020/10/BudgetWorkshop-2-logo.png">
<h1>ADMIN LOGIN</h1>
<input type="text" name="name" class="input" placeholder="USERNAME"><br><br><br>
<input type ="password" name="password" class="input" placeholder="name" value="default"><br><br><br>
<button onClick="validation()" name="submit">Submit</button>
</form>
</div>
</body>
</html>

<?php
$name = "";
$password = "";

if(isset($_POST['submit'])){
  $name = $_POST["name"];
  $password = $_POST["password"];

}
//echo $name;
//echo $password;

if($name == 'sapna' && $password == 'rupa'){
//echo"<script>alert(); </script>";
header("location:admin_user_detail");
}

?>