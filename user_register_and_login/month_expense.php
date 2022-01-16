<?php
include_once('menu_bar.php');
if(!isset($_COOKIE["names"]) && !isset($_COOKIE["passwords"])){
	header("location:user_login.php");

}
?>
<?php
include_once('user_table_connection.php');
?>

<!DOCTYPE>
<html>
<head>
<style>
.logo {
    margin-left: -72px;
    height: 75px;
    position: fixed;
    margin-top:2px;
}

.img{height: 3200px;
    width: 160px;
    background-color: ;
    margin-left: 300px;
    margin-top: -25px;
      }

.value{height:3200px;
      width:200px;
      margin-left:600px;
      margin-top:-220%;
      font-size:25px;font-family:cursive;
      }
.mic{height:3200px;width:100px;background-color:;margin-left:1000px;margin-top:-224%;}

.item_img{height:150px;width:150px}

.mic-img{height:80px;width:80px;}

input[type=number]{
  width: 180%;
  height:50px;
  display: inline-block;
  border: 5px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  font-size:25px ;
  font-weight:bold;
}

.submit{
      height:140px;
      width:150%;
      margin-left:-30px;
      border-radius: 200px;
}
.heading{height:120px;
         width:1200px;
         margin-left:200px;
}
</style>
<script type="text/javascript" src="1MonthExpense.js"></script>

</head>

<body>
<div class="content">
<input type="image" src="img/exp3.png" class="heading">
<div class="img" ><br>
<input type="image" class="item_img" src="img/fruit.jpg" ><br>
<input type="image" class="item_img" src="img/vege.jpg"><br>
<input type="image" class="item_img" src="img/milk.png"><br>
<input type="image" class="item_img" src="img/masala.jpg"><br>
<input type="image" class="item_img" src="img/cereals.jpg"><br>
<input type="image" class="item_img" src="img/sugar.jpg"><br>
<input type="image" class="item_img" src="img/salt.jpg"><br>
<input type="image" class="item_img" src="img/egg.jpg"><br>
<input type="image" class="item_img" src="img/meat.jpg"><br>
<input type="image" class="item_img" src="img/education.jpg"><br>
<input type="image" class="item_img" src="img/clothes.jpg"><br>
<input type="image" class="item_img" src="img/cell.jpg"><br>
<input type="image" class="item_img" src="img/ligh.png"><br>
<input type="image" class="item_img" src="img/tv.jpg"><br>
<input type="image" class="item_img" src="img/gas.png"><br>
<input type="image" class="item_img" src="img/rent.jpg"><br>
<input type="image" class="item_img" src="img/travel.jpg"><br>
<input type="image" class="item_img" src="img/medical.jpg"><br>
<input type="image" class="item_img" src="img/personal.jpg"><br>
<input type="image" class="item_img" src="img/other.png"><br>
</div>

<!---mic Image-->

<div class="mic">
<br><br><br>
<input type="image" class="mic-img" src="img/mic3.png" onclick="fruit_mic()"><br><br><br><br>
<input type="image" class="mic-img" src="img/mic3.png" onclick="vege_mic()"><br><br><br>
<input type="image" class="mic-img" src="img/mic3.png" onclick="milk_mic()"><br><br><br>
<input type="image" class="mic-img" src="img/mic3.png" onclick="massala_mic()"><br><br><br>
<input type="image" class="mic-img" src="img/mic3.png" onclick="cereal_mic()"><br><br><br>
<input type="image" class="mic-img" src="img/mic3.png" onclick="sugar_mic()"><br><br><br>
<input type="image" class="mic-img" src="img/mic3.png" onclick="salt_mic()"><br><br><br>
<input type="image" class="mic-img" src="img/mic3.png" onclick="egg_mic()"><br><br><br>
<input type="image" class="mic-img" src="img/mic3.png" onclick="meat_mic()"><br><br><br>
<input type="image" class="mic-img" src="img/mic3.png" onclick="education_mic()"><br><br><br>
<input type="image" class="mic-img" src="img/mic3.png" onclick="clothing_mic()"><br><br><br>
<input type="image" class="mic-img" src="img/mic3.png" onclick="phone_mic()"><br><br><br>
<input type="image" class="mic-img" src="img/mic3.png" onclick="light_mic()"><br><br><br>
<input type="image" class="mic-img" src="img/mic3.png" onclick="cable_mic()"><br><br><br>
<input type="image" class="mic-img" src="img/mic3.png" onclick="gas_mic()"><br><br><br>
<input type="image" class="mic-img" src="img/mic3.png" onclick="rent_mic()"><br><br><br>
<input type="image" class="mic-img" src="img/mic3.png" onclick="traveling_mic()"><br><br><br>
<input type="image" class="mic-img" src="img/mic3.png" onclick="medical_mic()"><br><br><br>
<input type="image" class="mic-img" src="img/mic3.png" onclick="personal_mic()"><br><br><br>
<input type="image" class="mic-img" src="img/mic3.png" onclick="other_mic()"><br><br><br>
</div>

<!--input type-->

<div class="value">
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
<br><br>
FRUIT <br>   
<input type="number" name="fruit" id="fruit" disabled><br><br><br><br>

VEGETABLE<br>
<input type="number" name="vegetable" id="vege" disabled><br><br><br>
MILK <br>
<input type="number" name="milk" id="milk" disabled><br><br><br>
MASALA <br>
<input type="number" name="massala" id="massala" disabled><br><br><br>
CEREALS <br>
<input type="number" name="cereal" id="cereal" disabled><br><br><br>
SUGAR <br>
<input type="number" name="sugar" id="sugar" disabled><br><br><br>
SALT <br>
<input type="number" name="salt" id="salt" disabled><br><br><br>
EGG <br>
<input type="number" name="egg" id="egg" disabled><br><br><br>
MEAT <br>
<input type="number" name="meat" id="meat" disabled><br><br><br>
EDUCATION <br>
<input type="number" name="education" id="education" disabled><br><br><br>
CLOTHING <br>
<input type="number" name="clothing" id="clothing" disabled><br><br><br>
CELL PHONE BILL <br>
<input type="number" name="phone_bill" id="phone" disabled><br><br><br>
LIGHT BILL <br>
<input type="number" name="light_bill" id="light" disabled><br><br><br>
CABLE BILL <br>
<input type="number" name="cable_bill" id="cable" disabled><br><br><br>
GAS BILL <br>
<input type="number" name="gas_bill" id="gas" disabled><br><br><br>
RENT <br>
<input type="number" name="rent" id="rent" disabled><br><br><br>
TRAVELING<br>
<input type="number" name="traveling" id="traveling" disabled><br><br><br>
MEDICAL <br>
<input type="number" name="medical" id="medical" disabled><br><br><br>
PERSONAL <br>
<input type="number" name="personal" id="personal" disabled><br><br><br>
OTHER <br>
<input type="number" name ="other" id="other" disabled><br>
<!--<input type="image" class="submit" src="img/yes.png">-->
</from>
</div>
</div>
</body>
</html>

<!---php page------------------------------------------->
<?php

$fruit = 0;
$vegetable = 0;
$milk = 0;
$massala = 0;
$cereal = 0;
$sugar = 0;
$salt = 0;
$egg = 0;
$meat = 0;
$clothing = 0;
$education = 0;
$phone_bill = 0;
$cable_bill = 0;
$gas_bill = 0;
$light_bill = 0;
$rent = 0;
$traveling= 0;
$medical = 0;
$personal = 0;
$other = 0;

$date = date("y-m-d");

$host = "localhost";
$user = "root";
$password = "";
$database = "expense_detail";

$conn = mysqli_connect($host,$user,$password,$database);
if($conn === false){
  die("not connected");
}
else{
 echo "";
}

$sql = "SELECT *  FROM expense WHERE  user_id ='$id' AND (`date` BETWEEN DATE_SUB( CURDATE( ) ,INTERVAL 1 MONTH ) AND CURDATE( )) ";

$result = $conn-> query($sql);
if($result-> num_rows > 0){
 while($row = $result->fetch_assoc()){

             $fruit +=  $row['fruit'];
             $vegetable +=  $row['vegetable'];
             $milk +=  $row['milk'];
             $massala +=  $row['massala'];
             $cereal +=  $row['cereal'];
             $sugar +=  $row['sugar'];
             $salt +=  $row['salt'];
             $egg +=  $row['egg'];
             $meat +=  $row['meat'];
             $clothing +=  $row['clothing'];
             $education +=  $row['education'];
             $phone_bill +=  $row['phone_bill'];
             $cable_bill +=  $row['cable_bill'];
             $gas_bill +=  $row['gas_bill'];
             $light_bill +=  $row['light_bill'];
             $rent +=  $row['rent'];
             $traveling +=  $row['traveling'];
             $medical +=  $row['medical'];
             $personal +=  $row['personal'];
             $other +=  $row['other'];
    }
}
$Total =0;
$Total = $fruit + $vegetable + $milk + $massala + $cereal+
         $sugar + $salt + $egg + $meat + $clothing+
         $education + $phone_bill + $cable_bill + $gas_bill + $light_bill+
         $rent + $traveling + $medical + $personal + $other;

$closeConnection = mysqli_close($conn);

?>

<!------JavaScript Page------------------------------>
<script>
// sum of a
    var jsvar1 = '<?=$fruit ?>';
document.getElementById("fruit").value = jsvar1;

// sum of b
var jsvar2 = '<?=$vegetable?>';
document.getElementById("vege").value = jsvar2;

// sum of c
var jsvar3 = '<?=$milk?>';
document.getElementById("milk").value = jsvar3;

// sum of d
var jsvar4 = '<?=$massala?>';
document.getElementById("massala").value = jsvar4;

// sum of e
var jsvar5 = '<?=$cereal?>';
document.getElementById("cereal").value = jsvar5;

// sum of f
    var jsvar6 = '<?=$sugar ?>';
document.getElementById("sugar").value = jsvar6;

// sum of g
var jsvar7 = '<?=$salt?>';
document.getElementById("salt").value = jsvar7;

// sum of h
var jsvar8 = '<?=$egg?>';
document.getElementById("egg").value = jsvar8;

// sum of i
var jsvar9 = '<?=$meat?>';
document.getElementById("meat").value = jsvar9;

// sum of j
var jsvar10 = '<?=$education?>';
document.getElementById("education").value = jsvar10;

// sum of k
    var jsvar11 = '<?=$clothing?>';
document.getElementById("clothing").value = jsvar11;

// sum of l
var jsvar12 = '<?=$phone_bill?>';
document.getElementById("phone").value = jsvar12;

// sum of m
var jsvar13 = '<?=$light_bill?>';
document.getElementById("light").value = jsvar13;

// sum of n
var jsvar14 = '<?=$cable_bill?>';
document.getElementById("cable").value = jsvar14;

// sum of o
var jsvar15 = '<?=$gas_bill?>';
document.getElementById("gas").value = jsvar15;

// sum of p
    var jsvar16 = '<?=$rent?>';
document.getElementById("rent").value = jsvar16;

// sum of q
var jsvar17 = '<?=$traveling?>';
document.getElementById("traveling").value = jsvar17;

// sum of r
var jsvar18 = '<?=$medical?>';
document.getElementById("medical").value = jsvar18;

// sum of s
var jsvar19 = '<?=$personal?>';
document.getElementById("personal").value = jsvar19;

// sum of t
var jsvar20 = '<?=$other?>';
document.getElementById("other").value = jsvar20;

// Total
//var Total = '<?=$Total?>';
//document.getElementById("total").value = Total;

</script>
