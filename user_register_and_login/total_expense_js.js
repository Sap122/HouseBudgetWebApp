//day image click event---------------------------------------------------------------------
function day_info(){
//alert("day");
               
                let msg = "आज का कुल खर्च  " ;
                
                let speech = new SpeechSynthesisUtterance();
                speech.lang = "hi-IN";
                
                speech.text = msg;
                speech.volume = 1;
                speech.rate = 1;
                speech.pitch = 1;
                
                window.speechSynthesis.speak(speech);
                

}

//week image click event-----------------------------------------------------------------
           function week_info(){
                                 
                 //alert("week");
                  let msg = "एक हफ्ते  का कुल खर्च  " ;
                
                let speech = new SpeechSynthesisUtterance();
                speech.lang = "hi-IN";
                
                speech.text = msg;
                speech.volume = 1;
                speech.rate = 1;
                speech.pitch = 1;
                
                window.speechSynthesis.speak(speech);
                
                             }

//month image click event----------------------------------------------------------------------
                     function month_info(){
                       
                 //alert("month");                           
                 let msg = "एक महीने   का कुल खर्च  " ;
                
                let speech = new SpeechSynthesisUtterance();
                speech.lang = "hi-IN";
                
                speech.text = msg;
                speech.volume = 1;
                speech.rate = 1;
                speech.pitch = 1;
                
                window.speechSynthesis.speak(speech);

                                         }

//day total expense ---------------------------------------------------------------------------------
                  function day_total(){
 
                   
                    var x1 = document.getElementById("1DayTotal").value;     
                    //alert("day total expense");
                let msg ="आज का कुल खर्च  " + x1 ;
                
                let speech = new SpeechSynthesisUtterance();
                speech.lang = "hi-IN";
                
                speech.text = msg;
                speech.volume = 1;
                speech.rate = 1;
                speech.pitch = 1;
                
                window.speechSynthesis.speak(speech);
                                          }

//week total expense --------------------------------------------------------------------------------------
                   function week_total(){

                    var x1 = document.getElementById("1WeekTotal").value;                       
                  //alert("week total expense");
                 let msg ="एक हफ्ते  का कुल खर्च  "+ x1 ;
                
                let speech = new SpeechSynthesisUtterance();
                speech.lang = "hi-IN";
                
                speech.text = msg;
                speech.volume = 1;
                speech.rate = 1;
                speech.pitch = 1;
                
                window.speechSynthesis.speak(speech);
                                         }

//month total expense ----------------------------------------------------------------------------------------------
                    function month_total(){

                     var x1 = document.getElementById("1MonthTotal").value;
                   //alert("month total expense");
                 let msg = "एक महीने   का कुल खर्च  "+ x1;
                
                let speech = new SpeechSynthesisUtterance();
                speech.lang = "hi-IN";
                
                speech.text = msg;
                speech.volume = 1;
                speech.rate = 1;
                speech.pitch = 1;
                
                window.speechSynthesis.speak(speech);

                                       }