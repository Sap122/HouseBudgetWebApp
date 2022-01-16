
<?php
$fruit = "";
$vegetable = "";
$milk = "";
$massala = "";
$cereal = "";
$sugar = "";
$salt = "";
$egg = "";
$meat = "";
$clothing = "";
$education = "";
$phone_bill = "";
$cable_bill = "";
$gas_bill = "";
$light_bill = "";
$rent = "";
$traveling= "";
$medical = "";
$personal = "";
$other = "";

$date = date("y-m-d");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
$fruit = (int) $_POST["fruit"];
$vegetable = (int) $_POST["vegetable"];
$milk =  (int)$_POST["milk"];
$massala =  (int)$_POST["massala"];
$cereal =  (int)$_POST["cereal"];
$sugar =  (int)$_POST["sugar"];
$salt =  (int)$_POST["salt"];
$egg =  (int)$_POST["egg"];
$meat = (int) $_POST["meat"];
$clothing = (int) $_POST["clothing"];
$education = (int) $_POST["education"];
$phone_bill = (int) $_POST["phone_bill"];
$cable_bill = (int) $_POST["cable_bill"];
$gas_bill =  (int)$_POST["gas_bill"];
$light_bill =  (int)$_POST["light_bill"];
$rent =  (int)$_POST["rent"];
$traveling =  (int)$_POST["traveling"];
$medical =  (int)$_POST["medical"];
$personal = (int) $_POST["personal"];
$other = (int) $_POST["other"];
}

//if value are null they not go in database not modify some value by null value-----------------------------------



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

//check the user has enter value or not if not enter then they can enter if they 
//already enter than  update the value-------------------------------------------------



$select = "SELECT *FROM expense WHERE date = '$date' AND user_id = '$id'";
$check = mysqli_query($conn, $select);
$result = mysqli_num_rows($check);
if($result == 0){ 

$insert = "INSERT INTO expense 
(date,user_id,fruit,vegetable,milk,massala,cereal,sugar,salt,egg,meat,education,clothing,light_bill,gas_bill,cable_bill,phone_bill,rent,traveling,medical,personal,other) 
VALUES ('$date','$id','$fruit','$vegetable','$milk','$massala','$cereal','$sugar','$salt','$egg','$meat','$education','$clothing','$light_bill','$gas_bill','$cable_bill','$phone_bill','$rent','$traveling','$medical','$personal','$other')";

mysqli_query($conn, $insert);
               }
               
else{
         if( $fruit !=0){$update = "UPDATE expense SET fruit='$fruit' WHERE user_id ='$id' AND date ='$date'"; 
                       $conn->query($update);
                     }
          if( $vegetable !=0){$update = "UPDATE expense SET vegetable='$vegetable' WHERE user_id ='$id' AND date ='$date' "; 
                       $conn->query($update);
                     }
          if( $milk !=0){$update = "UPDATE expense SET milk='$milk' WHERE user_id ='$id' AND date ='$date'"; 
                       $conn->query($update);
                     }
          if( $massala !=0){$update = "UPDATE expense SET massala='$massala' WHERE user_id ='$id' AND date ='$date'"; 
                       $conn->query($update);
                     }
          if( $cereal !=0){$update = "UPDATE expense SET cereal='$cereal' WHERE user_id ='$id' AND date ='$date'"; 
                       $conn->query($update);
                     }
         if( $sugar !=0){$update = "UPDATE expense SET sugar='$sugar' WHERE user_id ='$id' AND date ='$date'"; 
                       $conn->query($update);
                     }
         if( $salt !=0){$update = "UPDATE expense SET salt='$salt' WHERE user_id ='$id' AND date ='$date'"; 
                       $conn->query($update);
                     }
         if( $egg !=0){$update = "UPDATE expense SET egg='$egg' WHERE user_id ='$id' AND date ='$date'"; 
                       $conn->query($update);
                     }
         if( $meat !=0){$update = "UPDATE expense SET meat='$meat' WHERE user_id ='$id' AND date ='$date'"; 
                       $conn->query($update);
                     }
         
         if( $education !=0){$update = "UPDATE expense SET education='$education' WHERE user_id ='$id' AND date ='$date'"; 
                       $conn->query($update);
                     }
          if( $clothing !=0){$update = "UPDATE expense SET clothing='$clothing' WHERE user_id ='$id' AND date ='$date'"; 
                       $conn->query($update);
                     }
          if( $light_bill !=0){$update = "UPDATE expense SET light_bill='$light_bill' WHERE user_id ='$id' AND date ='$date'"; 
                       $conn->query($update);
                     }
          if( $gas_bill !=0){$update = "UPDATE expense SET gas_bill='$gas_bill' WHERE user_id ='$id' AND date ='$date'"; 
                       $conn->query($update);
                     }
          if( $cable_bill !=0){$update = "UPDATE expense SET cable_bill='$cable_bill' WHERE user_id ='$id' AND date ='$date'"; 
                       $conn->query($update);
                     }
         if( $phone_bill !=0){$update = "UPDATE expense SET phone_bill='$phone_bill' WHERE user_id ='$id' AND date ='$date'"; 
                       $conn->query($update);
                     }
         if( $rent !=0){$update = "UPDATE expense SET rent='$rent' WHERE user_id ='$id' AND date ='$date'"; 
                       $conn->query($update);
                     }
         if( $traveling !=0){$update = "UPDATE expense SET traveling='$traveling' WHERE user_id ='$id' AND date ='$date'"; 
                       $conn->query($update);
                     }
         if( $medical !=0){$update = "UPDATE expense SET medical='$medical' WHERE user_id ='$id' AND date ='$date'"; 
                       $conn->query($update);
                     }
         if( $personal !=0){$update = "UPDATE expense SET personal='$personal' WHERE user_id ='$id' AND date ='$date'"; 
                       $conn->query($update);
                     }
        if( $other !=0){$update = "UPDATE expense SET other='$other' WHERE user_id ='$id' AND date ='$date'"; 
                       $conn->query($update);
                     }
     }            

$closeConnection = mysqli_close($conn);
?>

