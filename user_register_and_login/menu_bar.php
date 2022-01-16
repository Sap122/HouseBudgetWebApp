<?php


?>

<!--Html page -->

<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1">
<head>
<script type="text/javascript" src="menuaudio.js"></script>

<style>
body {margin:0;height:2000px;}

.logo{margin-left:-72px;
      height:75px;position:fixed;}

.icon-bar {
  position: fixed;
   top: 50%;
  -webkit-transform: translateY(-44.5%);
  -ms-transform: translateY(-44.5%);
  transform: translateY(-44.5%);
}

.icon-bar a {
  display: block;
  transition: all 0.3s ease;
  color: white;
  font-size: 20px;
  text-decoration:none;
  font-family:"Lato", sans-serif;
}

.icon-bar a:hover {
  background-color: black;
}

.menu-item {
  background-color: rgb(100, 100, 100);
  color: white;
}
.menu-img{height:75px;width:75px;margin-left:0}

.content {
  margin-left: 75px;
  font-size: 30px;
}
</style>
</head>
<body>

<div class="icon-bar">
  <a href="Home.php" class="menu-item" ><input type="image" src="img/home.png" class="menu-img" onClick="a()" >Home</a> 
  <a href="expenditure_amount.php" class="menu-item"><input type="image" src="img/Daily_expenditure.png" class="menu-img" onClick="b()">Daily Expenditure</a> 
  <a href="total.php" class="menu-item"><input type="image" src="img/expense_report.png" class="menu-img" onClick="c()">Expense Report</a> 
  <a href="Saving.php" class="menu-item"><input type="image" src="img/saving.png" class="menu-img" onClick="d()" >Saving</a>
  <a href="user_register.php" class="menu-item"><input type="image" src="img/user_register.png" class="menu-img" onClick="e()" >Register</a> 
  <a href="user_login.php" class="menu-item"><input type="image" src="img/user_login.png" class="menu-img" onClick="f()">Login</a> 
  <a href="user_logout.php" class="menu-item"><input type="image" src="img/user_logout.png" class="menu-img" onClick="g()">Logout</a> 
  <a href="admin_login.php" class="menu-item" "><input type="image" src="img/admin_login.png" class="menu-img" onClick="h()" >Admin Login</a> 
</div>

<div class="content">
<input type="image" src="img/logo.png" class="logo">

</div>
</body>
</html>
