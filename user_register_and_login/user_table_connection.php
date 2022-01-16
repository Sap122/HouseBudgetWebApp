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


