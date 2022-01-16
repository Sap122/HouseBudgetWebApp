<?php
include_once('user_table_connection.php');
?>


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

$sql = "SELECT *  FROM expense WHERE  user_id ='$id' AND (`date` BETWEEN DATE_SUB( CURDATE( ) ,INTERVAL 0 DAY ) AND CURDATE( )) ";

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

<!---------------------------------------1Week Expense Total--------------->

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


///1week total amount

$sql = "SELECT *  FROM expense WHERE  user_id ='$id' AND (`date` BETWEEN DATE_SUB( CURDATE( ) ,INTERVAL 7 DAY ) AND CURDATE( )) ";

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
$Total_Week =0;
$Total_Week = $fruit + $vegetable + $milk + $massala + $cereal+
         $sugar + $salt + $egg + $meat + $clothing+
         $education + $phone_bill + $cable_bill + $gas_bill + $light_bill+
         $rent + $traveling + $medical + $personal + $other;



$closeConnection = mysqli_close($conn);

?>

<!-------------------------------------1 Month Total-------------------------->

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
$Total_Month =0;
$Total_Month = $fruit + $vegetable + $milk + $massala + $cereal+
         $sugar + $salt + $egg + $meat + $clothing+
         $education + $phone_bill + $cable_bill + $gas_bill + $light_bill+
         $rent + $traveling + $medical + $personal + $other;




$closeConnection = mysqli_close($conn);

?>
