<!DOCTYPE html>
<html lang="en">
  
<head>
    <meta charset="UTF-8">
    <title> User Details</title>
<style>

table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  text-align: left;
  padding: 8px;
}

tr:nth-child(even){background-color: lightgrey;}

th {
  background-color: #04AA6D;
  color: white;
}
h1{text-align:center;
   font-size: 40px;
//   font-family: "Lucida Console", "Courier New", monospace;
}


.cancel{ height: 70px;
    margin-left: 20px;
   
}
</style>
  
</head>
  
<body>
<a href="welcome.php"><input type="image" src="img/cancel.png" class="cancel"></a>
    <section>
        <h1><u>USER DETAIL</u></h1>
        <!-- TABLE CONSTRUCTION-->
        <table>
            <tr>
                <th> ID</th>
                <th> NAME</th>
                <th>PASSWORD</th>
                <th>EMAIL</th>
                <th>MONTHLY INCOME</th>
                <th>DATE</th>
            </tr>




<?php
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
$sql = "SELECT * FROM user_table ORDER BY user_id";

$result = $conn-> query($sql);
if($result-> num_rows > 0){
 while($row = $result->fetch_assoc()){
             echo 
        " <tr>
                
                <td>{$row['user_id']}</td>
                <td>{$row['user_name']}</td>
                <td>{$row['user_password']}</td>
                <td>{$row['user_email']}</td>               
                <td>{$row['user_monthly_income']}</td>
                <td>{$row['user_login_date']}</td>
            </tr> ";
             
}
}
 $result = $conn->query($sql);
?>
</table>
    </section>
</body>
  
</html>





