
 
function runSpeechRecognition_name() {
 	      
    
    // new speech recognition object
  var SpeechRecognition = SpeechRecognition || webkitSpeechRecognition;
   var recognition = new SpeechRecognition();
            
                            
               
  // This runs when the speech recognition service returns result
    recognition.onresult = function(event) {
    var transcript = event.results[0][0].transcript;
  //   alert(transcript);
    document.getElementById("name").setAttribute('value',transcript);
             };
              
  //   start recognition
    recognition.start();
	        }

//mic function for password

 function runSpeechRecognition_password() {
		      
    // new speech recognition object
  var SpeechRecognition = SpeechRecognition || webkitSpeechRecognition;
   var recognition = new SpeechRecognition();
            
                            
               
  // This runs when the speech recognition service returns result
    recognition.onresult = function(event) {
    var transcript = event.results[0][0].transcript;
     //  alert(transcript);
    document.getElementById("password").setAttribute('value',transcript);
             };
              
 //  start recognition
   
 recognition.start();
	        }



//audio for image 
//user name audio paly 
function playAudioName() {
        
                var name = document.getElementById("name").value;
                            
                let msg = "आपका नाम       " +name;
                
                let speech = new SpeechSynthesisUtterance();
                speech.lang = "hi-IN";
                
                speech.text = msg;
                speech.volume = 1;
                speech.rate = 1;
                speech.pitch = 1;
                
                window.speechSynthesis.speak(speech);
            }

//user password audio
function playAudioPassword() {
               // alert();
                var password = document.getElementById("password").value;
                let msg = "आपका पासवर्ड       " +password;
                
                let speech = new SpeechSynthesisUtterance();
                speech.lang = "hi-IN";
                
                speech.text = msg;
                speech.volume = 1;
                speech.rate = 1;
                speech.pitch = 1;
                
                window.speechSynthesis.speak(speech);
            }
