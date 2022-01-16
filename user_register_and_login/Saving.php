<?php
include_once('menu_bar.php');
include_once('Bar_graph.php');
if(!isset($_COOKIE["names"]) && !isset($_COOKIE["passwords"])){
	header("location:user_login.php");

}
?>
<?php 
//index.php
$connect = mysqli_connect("localhost", "root", "", "report");
$query = "SELECT *  FROM report_table WHERE user_id='$id' AND`date` BETWEEN DATE_SUB( CURDATE( ) ,INTERVAL 2 DAY ) AND CURDATE( )";
$result = mysqli_query($connect, $query);
$chart_data = '';
while($row = mysqli_fetch_array($result))
{
 $chart_data .= "{ date:'".$row["date"]."', Income:".$row["Income"].", Expenditure:".$row["Expenditure"].", Saving:".$row["Saving"]."}, ";
}

?>


<!DOCTYPE html>
<html>
 <head>
  <title>chart with PHP & Mysql | lisenme.com </title>
  <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>

 <style>

 table{margin:2px;}

 tr,td{padding: 15px;}

.amount{ font-size:25px;
         font-weight:bold;
         font-family:cursive;
         height:18.5%;
         width:28%;
        // background-image: linear-gradient(-225deg, #E3FDF5 0%, #FFE6FA 100%);
        background-image: linear-gradient(to top, #a8edea 0%, #fed6e3 100%);
        // background-color:#E7E9EB;
         margin-left:69%;
         margin-top:-26%;
         border-radius:50px;
         box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19); 
       }

.btn1 {
        height: 80px;
        width: 80px;
        margin-left: 8%; 
        margin-top: 8%;
        background-color:rgb(11, 98, 164);
      }

.btn2 {
        height: 80px;
        width: 80px;
        margin-left: 8%; 
        margin-top: 8%;
        background-color:rgb(122, 146, 163);
      }

.btn3 {
        height: 80px;
        width: 80px;
        margin-left: 8%; 
        margin-top: 8%;
        background-color:rgb(77, 167, 77);
      }

input[type=text]{
                  height:30px;
                  width:180px;
                  border:5px solid grey;
                  font-size:28px;
                  font-weight:bold;
                  color:green;
       }

.logo {
    margin-left: -74px;
    height: 78px;
    width: 229px;
    position: fixed;
    background-color: midnightblue;
}


 </style>
  
 </head>
 <body>
  <img src="img\saveing-img.jpg" style="height: 15%;width: 85%;margin-left: 15%;">
   <div id="chart" style="height:20%;width:50%;margin-left:250px" onclick="chart_click()"> </div>
   <div  class="amount"> 
   <table>
   <tr>
      <td> <button class="btn1" onclick="income()"></button><br> </td>
       <td> INCOME <input type="text" id="income"><br></td>
       <td><input type="image" src="img\mic3.png" style="height:50px;width:53px" onclick="income_mic()"> </td>
   </tr>
    <tr>
      <td> <button class="btn2" onclick="expenditure()"></button><br> </td>
       <td>EXPENDITURE<input type="text" id="expenditure" ><br></td>
       <td><input type="image" src="img\mic3.png" style="height:50px;width:53px" onclick="expenditure_mic()"> </td>
   </tr>
   <tr>
      <td> <button  class="btn3" onclick="saving()" ></button><br> </td>
       <td>SAVING<input type="text" id="saving"><br></td>
       <td><input type="image" src="img\mic3.png" style="height:50px;width:53px" onclick="saving_mic()"> </td>
   </tr>
   
  </table>
  </div>

 </body>
</html>

<script>
Morris.Bar({
 element : 'chart',
 data:[<?php echo $chart_data; ?>],
 xkey:'date',
 ykeys:['Income', 'Expenditure', 'Saving'],
 labels:['income', 'expenditure', 'saving'],
 hideHover:'auto',
});




//value ..................................................................................
 var jsvar1 = '<?=$income ?>';
document.getElementById("income").value = jsvar1 +" ₹";

var jsvar2 = '<?=$Total ?>';
document.getElementById("expenditure").value = jsvar2 +" ₹";

var jsvar3 = '<?=$saving ?>';
document.getElementById("saving").value = jsvar3 +" ₹";



//.................................................................................
function income(){

              //alert();
                let msg = "आपकी आमदनी  ";
                
                let speech = new SpeechSynthesisUtterance();
                speech.lang = "hi-IN";
                
                speech.text = msg;
                speech.volume = 1;
                speech.rate = 1;
                speech.pitch = 1;
                
                window.speechSynthesis.speak(speech);
}

function expenditure(){

              //alert();
                let msg = "कुल खर्च  ";
                
                let speech = new SpeechSynthesisUtterance();
                speech.lang = "hi-IN";
                
                speech.text = msg;
                speech.volume = 1;
                speech.rate = 1;
                speech.pitch = 1;
                
                window.speechSynthesis.speak(speech);
}

function saving(){

               //alert();
                let msg = "बचत  ";
                
                let speech = new SpeechSynthesisUtterance();
                speech.lang = "hi-IN";
                
                speech.text = msg;
                speech.volume = 1;
                speech.rate = 1;
                speech.pitch = 1;
                
                window.speechSynthesis.speak(speech);
}


function income_mic(){

              //alert();
                let msg = " आपकी आमदनी " +jsvar1 +" ₹";
                
                let speech = new SpeechSynthesisUtterance();
                speech.lang = "hi-IN";
                
                speech.text = msg;
                speech.volume = 1;
                speech.rate = 1;
                speech.pitch = 1;
                
                window.speechSynthesis.speak(speech);
}

function expenditure_mic(){

              //alert();
                let msg = " कुल खर्च " +jsvar2 +" ₹";
                
                let speech = new SpeechSynthesisUtterance();
                speech.lang = "hi-IN";
                
                speech.text = msg;
                speech.volume = 1;
                speech.rate = 1;
                speech.pitch = 1;
                
                window.speechSynthesis.speak(speech);
}

function saving_mic(){

              //alert();
                let msg = " बचत  " +jsvar3 +" ₹";
                
                let speech = new SpeechSynthesisUtterance();
                speech.lang = "hi-IN";
                
                speech.text = msg;
                speech.volume = 1;
                speech.rate = 1;
                speech.pitch = 1;
                
                window.speechSynthesis.speak(speech);
}

function chart_click(){
//  alert();
                let msg = "तीन दिनों की आमदनी खर्च और बचत का ग्राफ ";
                
                let speech = new SpeechSynthesisUtterance();
                speech.lang = "hi-IN";
                
                speech.text = msg;
                speech.volume = 1;
                speech.rate = 1;
                speech.pitch = 1;
                
                window.speechSynthesis.speak(speech);
 }
</script>