<?php
include_once('user_table_connection.php');
?>

<!DOCTYPE>
<html>
<head>
<style>
.value{
margin-top: -20%;
    margin-left: 20%;
}
.mic{margin-top: -115%;
    margin-left: 49%;
    }
.mic-img{height:60px;}
.item_img{
 height:80px;
}
.value {
margin-top:-105%;
}
input[type=number]{
height:30px;
width:200px;
}
</style>
</head>

<body>
<div class="image" ><br>
<input type="image" class="item_img"><br>
<input type="image" class="item_img"><br>
<input type="image" class="item_img"><br>
<input type="image" class="item_img"><br>
<input type="image" class="item_img"><br>
<input type="image" class="item_img"><br>
<input type="image" class="item_img"><br>
<input type="image" class="item_img"><br>
<input type="image" class="item_img"><br>
<input type="image" class="item_img"><br>
<input type="image" class="item_img"><br>
<input type="image" class="item_img"><br>
<input type="image" class="item_img"><br>
<input type="image" class="item_img"><br>
<input type="image" class="item_img"><br>
<input type="image" class="item_img"><br>
<input type="image" class="item_img"><br>
<input type="image" class="item_img"><br>
<input type="image" class="item_img"><br>
<input type="image" class="item_img"><br>

</div>
<div class="value">
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
FRUIT <br>   
<input type="number" name="fruit" id="a" ><br><br><br>
VEGETABLE<br>
<input type="number" name="vegetable" id="b" ><br><br><br>
MILK <br>
<input type="number" name="milk" id="c" ><br><br><br>
MASSALA <br>
<input type="number" name="massala" id="d" ><br><br><br>
CEREALS <br>
<input type="number" name="cereal" id="e" ><br><br><br>
SUGAR <br>
<input type="number" name="sugar" id="f" ><br><br><br>
SALT <br>
<input type="number" name="salt" id="g" ><br><br><br>
EGG <br>
<input type="number" name="egg" id="h" ><br><br><br>
MEAT <br>
<input type="number" name="meat" id="i" ><br><br><br>
EDUCATION <br>
<input type="number" name="education" id="j" ><br><br><br>
CLOTHING <br>
<input type="number" name="clothing" id="k" ><br><br><br>
CELL PHONE BILL <br>
<input type="number" name="phone_bill" id="l" ><br><br><br>
LIGHT BILL <br>
<input type="number" name="light_bill" id="m" ><br><br><br>
CABLE BILL <br>
<input type="number" name="cable_bill" id="n" ><br><br><br>
GAS BILL <br>
<input type="number" name="gas_bill" id="o" ><br><br><br>
RENT <br>
<input type="number" name="rent" id="p" ><br><br><br>
TRAVELING<br>
<input type="number" name="traveling" id="q" ><br><br><br>
MEDICAL <br>
<input type="number" name="medical" id="r" ><br><br><br>
PERSONAL <br>
<input type="number" name="personal" id="s" ><br><br><br>
OTHER <br>
<input type="number" name ="other" id="t" ><br>
</from>
</div>
<div class="mic"><br>
<div class="image" class="mic-img"><br><br><br>
<input type="image" class="mic-img"><br><br><br>
<input type="image" class="mic-img"><br><br><br>
<input type="image" class="mic-img"><br><br><br>
<input type="image" class="mic-img"><br><br><br>
<input type="image" class="mic-img"><br><br><br>
<input type="image" class="mic-img"><br><br><br>
<input type="image" class="mic-img"><br><br><br>
<input type="image" class="mic-img"><br><br><br>
<input type="image" class="mic-img"><br><br><br>
<input type="image" class="mic-img"><br><br><br>
<input type="image" class="mic-img"><br><br><br>
<input type="image" class="mic-img"><br><br><br>
<input type="image" class="mic-img"><br><br><br>
<input type="image" class="mic-img"><br><br><br>
<input type="image" class="mic-img"><br><br><br>
<input type="image" class="mic-img"><br><br><br>
<input type="image" class="mic-img"><br><br><br>
<input type="image" class="mic-img"><br><br><br>
<input type="image" class="mic-img"><br><br><br>
<input type="image" class="mic-img"><br><br><br>

</div>
<input type="submit">
</body>
</html>




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

$sql = "SELECT *  FROM expense WHERE  user_id ='$id' AND (`date` BETWEEN DATE_SUB( CURDATE( ) ,INTERVAL 2 DAY ) AND CURDATE( )) ";

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
             $traveling +=  $row['transportaion'];
             $medical +=  $row['medical'];
             $personal +=  $row['personal'];
             $other +=  $row['other'];
    }
}

$closeConnection = mysqli_close($conn);

?>

<script>
// sum of a
    var jsvar1 = '<?=$fruit ?>';
document.getElementById("a").value = jsvar1;

// sum of b
var jsvar2 = '<?=$vegetable?>';
document.getElementById("b").value = jsvar2;

// sum of c
var jsvar3 = '<?=$milk?>';
document.getElementById("c").value = jsvar3;

// sum of d
var jsvar4 = '<?=$massala?>';
document.getElementById("d").value = jsvar4;

// sum of e
var jsvar5 = '<?=$cereal?>';
document.getElementById("e").value = jsvar5;

// sum of f
    var jsvar1 = '<?=$sugar ?>';
document.getElementById("f").value = jsvar1;

// sum of g
var jsvar2 = '<?=$salt?>';
document.getElementById("g").value = jsvar2;

// sum of h
var jsvar3 = '<?=$egg?>';
document.getElementById("h").value = jsvar3;

// sum of i
var jsvar4 = '<?=$meat?>';
document.getElementById("i").value = jsvar4;

// sum of j
var jsvar5 = '<?=$education?>';
document.getElementById("j").value = jsvar5;

// sum of k
    var jsvar1 = '<?=$clothing?>';
document.getElementById("k").value = jsvar1;

// sum of l
var jsvar2 = '<?=$phone_bill?>';
document.getElementById("l").value = jsvar2;

// sum of m
var jsvar3 = '<?=$light_bill?>';
document.getElementById("m").value = jsvar3;

// sum of n
var jsvar4 = '<?=$cable_bill?>';
document.getElementById("n").value = jsvar4;

// sum of o
var jsvar5 = '<?=$gas_bill?>';
document.getElementById("o").value = jsvar5;

// sum of p
    var jsvar1 = '<?=$rent?>';
document.getElementById("p").value = jsvar1;

// sum of q
var jsvar2 = '<?=$traveling?>';
document.getElementById("q").value = jsvar2;

// sum of r
var jsvar3 = '<?=$medical?>';
document.getElementById("r").value = jsvar3;

// sum of s
var jsvar4 = '<?=$personal?>';
document.getElementById("s").value = jsvar4;

// sum of t
var jsvar5 = '<?=$other?>';
document.getElementById("t").value = jsvar5;

 
</script>
