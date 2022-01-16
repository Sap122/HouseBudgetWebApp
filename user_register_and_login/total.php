<?php
if(!isset($_COOKIE["names"]) && !isset($_COOKIE["passwords"])){
	header("location:user_login.php");}
else{
include_once('menu_bar.php');
include_once('total_expense_database.php');
}
?>
<html>
<head>
<title> expense</title>
<style>

.logo {
    margin-left: -90px;
    height: 75px;
    position: fixed;
    margin-top: 1px;
      }

.container{
    margin-left: 280px;
    margin-top: 42px;
    height: 700px;
    width: 1200px;
    background-color: #e2e2e2;
    position: fixed;
}

.Day {background-image:linear-gradient(#ffffff,#cc66ff);
      height: 500px;
      width: 340px;
      box-shadow: 10px 10px 5px grey; 
      border-radius:50px;
   
   }
.Week {background-image:linear-gradient(#ffffcc,#ff9900);
    height: 500px;
    width: 340px;
    margin-top: -500px;
    margin-left: 430px;
    box-shadow: 10px 10px 5px grey;
    border-radius:50px;
   }
.Month {background-image:linear-gradient(#ffffff,#0066cc);
    height: 500px;
    width: 340px;
    margin-top: -500px;
    margin-left: 858px;
    box-shadow: 10px 10px 5px grey;
    border-radius:50px;
   }

.i{ height:200px;
    width:280px;
    margin-left:25px;
   border-radius:80px;
     }

.heading{height:120px;
         width:1200px;
         

 }
h1{font-size: 80px;
    margin-left: 30px;
    margin-top: -10px;
       font-family: sans-serif;
    color:white;}

.ok{height:100px;
    width:100px;
    margin-left:120px;
    margin-top: 10px;
    box-shadow: 10px 10px 5px grey;
    border-radius:50px;
}
input[type=text]{
    height: 50px;
    width: 250px;
    margin-left: 18px;
    margin-top: -200px;
    font-size:50px;
    font-weight:bold;
    color:green;
    text-align:center;
}

</style>
<script type="text/javascript" src="total_expense_js.js"></script>

</head>

<body>
<div class="container">
<div>
<input type="image" src="img/exp.png" class="heading">
</div>
<!---------------1 Day Total ----------------------------------------->
<div class="Day" >
<input type="image" src="img/day.png" class="i" onclick="day_info()">
<h1>TOTAL</h1>
<input type="text" id="1DayTotal" disabled><input type="image" src="img/mic3.png" onclick="day_total()" style="height:50px;width:50px;margin-top:-40px" >
<a href="day_expense"><input type="image" src="img/yes.png" class="ok"></a>
</div>


<!---------------1 Week Total ----------------------------------------->
<div class="Week">
<input type="image" src="img/week.png" class="i" onclick="week_info()" >
<h1>TOTAL</h1>
<input type="text" id="1WeekTotal" disabled><input type="image" src="img/mic3.png" style="height:50px;width:50px;margin-top:-40px" onclick="week_total()" >
<a href="week_expense"><input type="image" src="img/yes.png" class="ok"> </a>
</div>


<!---------------1 Month Total ----------------------------------------->
<div class="Month">
<input type="image" src="img/month.png" class="i" onclick="month_info()">
<h1>TOTAL</h1>
<input type="text" id="1MonthTotal" disabled><input type="image" src="img/mic3.png" onclick="month_total()" style="height:50px;width:50px;margin-top:-40px" >
<a href="month_expense"><input type="image" src="img/yes.png" class="ok"> </a>
</div>
</div>
</body>
</hmtl>
<script>
// Total 1 Day//////////////////
var Total_Day = '<?=$Total?>';
document.getElementById("1DayTotal").value =  Total_Day +" ₹" ;

// Total 1 Week///////////////////
var Total_Week = '<?=$Total_Week?>';
document.getElementById("1WeekTotal").value = Total_Week +" ₹";

// Total 1 Month///////////////////
var Total_Month = '<?=$Total_Month?>';
document.getElementById("1MonthTotal").value = Total_Month +" ₹";

</script>