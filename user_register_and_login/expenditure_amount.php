
<?php
include_once('menu_bar.php');
if(!isset($_COOKIE["names"]) && !isset($_COOKIE["passwords"])){
	header("location:user_login.php");

}
?>
<?php
include_once('user_table_connection.php');
include_once('expense_table_connection.php');
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
    margin-top: -20px;
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
<script type="text/javascript" src="expenditure_item_js.js"></script>

</head>

<body>
<div class="content">
<input type="image" src="img/exp4.png" class="heading">
<div class="img" ><br>
<input type="image" class="item_img" src="img/fruit.jpg" onclick="fruit_amount()"><br>
<input type="image" class="item_img" src="img/vege.jpg" onclick="vege_amount()"><br>
<input type="image" class="item_img" src="img/milk.png" onclick="milk_amount()"><br>
<input type="image" class="item_img" src="img/masala.jpg" onclick="massala_amount()"><br>
<input type="image" class="item_img" src="img/cereals.jpg" onclick="cereal_amount()"><br>
<input type="image" class="item_img" src="img/sugar.jpg" onclick="sugar_amount()"><br>
<input type="image" class="item_img" src="img/salt.jpg" onclick="salt_amount()"><br>
<input type="image" class="item_img" src="img/egg.jpg" onclick="egg_amount()"><br>
<input type="image" class="item_img" src="img/meat.jpg" onclick="meat_amount()"><br>
<input type="image" class="item_img" src="img/education.jpg" onclick="education_amount()"><br>
<input type="image" class="item_img" src="img/clothes.jpg" onclick="clothes_amount()"><br>
<input type="image" class="item_img" src="img/cell.jpg" onclick="phone_amount()"><br>
<input type="image" class="item_img" src="img/ligh.png" onclick="light_amount()"><br>
<input type="image" class="item_img" src="img/tv.jpg" onclick="cable_amount()"><br>
<input type="image" class="item_img" src="img/gas.png" onclick="gas_amount()"><br>
<input type="image" class="item_img" src="img/rent.jpg" onclick="rent_amount()"><br>
<input type="image" class="item_img" src="img/travel.jpg" onclick="travel_amount()"><br>
<input type="image" class="item_img" src="img/medical.jpg" onclick="medical_amount()"><br>
<input type="image" class="item_img" src="img/personal.jpg" onclick="personal_amount()"><br>
<input type="image" class="item_img" src="img/other.png" onclick="other_amount()"><br>
</div>

<!---mic Image-->

<div class="mic">
<br><br><br>
<input type="image" class="mic-img" src="img/mic2.png" onclick="fruit_mic()"><br><br><br>
<input type="image" class="mic-img" src="img/mic2.png" onclick="vege_mic()"><br><br><br>
<input type="image" class="mic-img" src="img/mic2.png" onclick="milk_mic()"><br><br><br>
<input type="image" class="mic-img" src="img/mic2.png" onclick="massala_mic()"><br><br><br>
<input type="image" class="mic-img" src="img/mic2.png" onclick="cereal_mic()"><br><br><br>
<input type="image" class="mic-img" src="img/mic2.png" onclick="sugar_mic()"><br><br><br>
<input type="image" class="mic-img" src="img/mic2.png" onclick="salt_mic()"><br><br><br>
<input type="image" class="mic-img" src="img/mic2.png" onclick="egg_mic()"><br><br><br>
<input type="image" class="mic-img" src="img/mic2.png" onclick="meat_mic()"><br><br><br>
<input type="image" class="mic-img" src="img/mic2.png" onclick="education_mic()"><br><br><br>
<input type="image" class="mic-img" src="img/mic2.png" onclick="clothing_mic()"><br><br><br>
<input type="image" class="mic-img" src="img/mic2.png" onclick="phone_mic()"><br><br><br>
<input type="image" class="mic-img" src="img/mic2.png" onclick="light_mic()"><br><br><br>
<input type="image" class="mic-img" src="img/mic2.png" onclick="cable_mic()"><br><br><br>
<input type="image" class="mic-img" src="img/mic2.png" onclick="gas_mic()"><br><br><br>
<input type="image" class="mic-img" src="img/mic2.png" onclick="rent_mic()"><br><br><br>
<input type="image" class="mic-img" src="img/mic2.png" onclick="traveling_mic()"><br><br><br>
<input type="image" class="mic-img" src="img/mic2.png" onclick="medical_mic()"><br><br><br>
<input type="image" class="mic-img" src="img/mic2.png" onclick="personal_mic()"><br><br><br>
<input type="image" class="mic-img" src="img/mic2.png" onclick="other_mic()"><br><br><br>
</div>

<!--input type-->

<div class="value">
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
<br><br>
FRUIT <br>   
<input type="number" name="fruit" id="fruit"  min=0><br><br><br>

VEGETABLE<br>
<input type="number" name="vegetable" id="vege" min=0 ><br><br><br>
MILK <br>
<input type="number" name="milk" id="milk" min=0 ><br><br><br>
MASALA <br>
<input type="number" name="massala" id="massala" min=0 ><br><br><br>
CEREALS <br>
<input type="number" name="cereal" id="cereal" min=0 ><br><br><br>
SUGAR <br>
<input type="number" name="sugar" id="sugar" min=0 ><br><br><br>
SALT <br>
<input type="number" name="salt" id="salt" min=0 ><br><br><br>
EGG <br>
<input type="number" name="egg" id="egg" min=0 ><br><br><br>
MEAT <br>
<input type="number" name="meat" id="meat" min=0 ><br><br><br>
EDUCATION <br>
<input type="number" name="education" id="education" min=0 ><br><br><br>
CLOTHING <br>
<input type="number" name="clothing" id="clothing" min=0 ><br><br><br>
CELL PHONE BILL <br>
<input type="number" name="phone_bill" id="phone" min=0 ><br><br><br>
LIGHT BILL <br>
<input type="number" name="light_bill" id="light" min=0 ><br><br><br>
CABLE BILL <br>
<input type="number" name="cable_bill" id="cable" min=0 ><br><br><br>
GAS BILL <br>
<input type="number" name="gas_bill" id="gas" min=0 ><br><br><br>
RENT <br>
<input type="number" name="rent" id="rent" min=0 ><br><br><br>
TRAVELING<br>
<input type="number" name="traveling" id="traveling" min=0 ><br><br><br>
MEDICAL <br>
<input type="number" name="medical" id="medical" min=0 ><br><br><br>
PERSONAL <br>
<input type="number" name="personal" id="personal" min=0 ><br><br><br>
OTHER <br>
<input type="number" name ="other" id="other" min=0 ><br><br>
<input type="image" class="submit" src="img/yes.png" onclick="check()">
</from>
</div>


</div>
</body>
</html>


<!-- JavaScript-->
<script>

function check() {
 
  var x1 = document.getElementById("fruit").value;
  var x2 = document.getElementById("vege").value;
  var x3 = document.getElementById("milk").value;
  var x4 = document.getElementById("massala").value;
  var x5 = document.getElementById("cereal").value;
  var x6 = document.getElementById("egg").value;
  var x7 = document.getElementById("meat").value;
  var x8 = document.getElementById("sugar").value;
  var x9 = document.getElementById("salt").value;
  var x10 = document.getElementById("education").value;
  var x11 = document.getElementById("clothing").value;
  var x12 = document.getElementById("light").value;
  var x13 = document.getElementById("cable").value;
  var x14 = document.getElementById("gas").value;
  var x15 = document.getElementById("phone").value;
  var x16 = document.getElementById("medical").value;
  var x17 = document.getElementById("personal").value;  
  var x18 = document.getElementById("other").value;
  var x19 = document.getElementById("rent").value;  
  var x20 = document.getElementById("fruit").value;
  
 if( x1 < 0 || x2 < 0 || x3 < 0 || x4 < 0 || x5 < 0 || x6 < 0 || x7 < 0 || x8 < 0 ||
     x9 < 0 || x10 < 0 || x11 < 0 || x12 < 0 || x13 < 0 || x14 < 0 || x15 < 0 || x16 < 0 ||
     x17 < 0 || x18 < 0 || x19 < 0 || x20 < 0)    
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
