<?php
$id = "";
$name = $_COOKIE["names"];
$password = $_COOKIE["passwords"];
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
$sql = "SELECT * FROM user_table WHERE user_name = '$name' AND user_password = '$password' ";

$result = $conn-> query($sql);
if($result-> num_rows > 0){
 while($row = $result->fetch_assoc()){
       $id = $row['user_id'];
       $income = $row['user_monthly_income'];
             
}
}
 $result = $conn->query($sql);
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



<?php

$saving = "";
$user="root";
$pass= "";
$host="localhost";
$db="report";
$conn = mysqli_connect($host,$user,$pass,$db);
if($conn === false){
    die("not connected");
}
else{
    echo" ";
} 


$saving = $income-$Total;


$insert = "INSERT INTO report_table (user_id,Income,Expenditure,Saving,date) VALUES ('$id','$income','$Total','$saving','$date')";
mysqli_query($conn, $insert)



?>



