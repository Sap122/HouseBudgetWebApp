 
   function runSpeechRecognition() {
    
		      
    // new speech recognition object
  var SpeechRecognition = SpeechRecognition || webkitSpeechRecognition;
   var recognition = new SpeechRecognition();
            
                            
               
  // This runs when the speech recognition service returns result
    recognition.onresult = function(event) {
    var transcript = event.results[0][0].transcript;
    var confidence = event.results[0][0].confidence;
 //    alert(transcript);
    document.getElementById("user_name").setAttribute('value',transcript);
             };
              
  // start recognition{
    recognition.start();
	        }
//mic function for password
 function runSpeechRecognition1() {
		      
    // new speech recognition object
  var SpeechRecognition = SpeechRecognition || webkitSpeechRecognition;
   var recognition = new SpeechRecognition();
            
                            
               
  // This runs when the speech recognition service returns result
    recognition.onresult = function(event) {
    var transcript = event.results[0][0].transcript;
    var confidence = event.results[0][0].confidence;
   //  alert(transcript);
    document.getElementById("password").setAttribute('value',transcript);
             };
              
  // start recognition{
    recognition.start();
	        }


//mic for income function
 function runSpeechRecognition2() {
		      
    // new speech recognition object
  var SpeechRecognition = SpeechRecognition || webkitSpeechRecognition;
   var recognition = new SpeechRecognition();
            
                            
               
  // This runs when the speech recognition service returns result
    recognition.onresult = function(event) {
    var transcript = event.results[0][0].transcript;
    var confidence = event.results[0][0].confidence;
    // alert(transcript);
    document.getElementById("email").setAttribute('value',transcript);
             };
              
  // start recognition{
    recognition.start();
	        }



//mic for income function
 function runSpeechRecognition3() {
		      
    // new speech recognition object
  var SpeechRecognition = SpeechRecognition || webkitSpeechRecognition;
   var recognition = new SpeechRecognition();
            
                            
               
  // This runs when the speech recognition service returns result
    recognition.onresult = function(event) {
    var transcript = event.results[0][0].transcript;
    var confidence = event.results[0][0].confidence;
  //   alert(transcript);
    document.getElementById("income").setAttribute('value',transcript);
             };
              
  // start recognition{
    recognition.start();
	        }


//audio for image 
//user name audio paly 
function playAudioName() {
        
                var name = document.getElementById("user_name").value;
                            
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

//user email id audio

function playAudioEmail() {

                var email = document.getElementById("email").value;
                let msg = "आपका ईमेल     " +email ;
                
                let speech = new SpeechSynthesisUtterance();
                speech.lang = "hi-IN";
                
                speech.text = msg;
                speech.volume = 1;
                speech.rate = 1;
                speech.pitch = 1;
                
                window.speechSynthesis.speak(speech);
            }

//user monthly income

function playAudioIncome() {

                var income = document.getElementById("income").value;
                let msg = "आपकी आमदनी     " +income ;
                
                let speech = new SpeechSynthesisUtterance();
                speech.lang = "hi-IN";
                
                speech.text = msg;
                speech.volume = 1;
                speech.rate = 1;
                speech.pitch = 1;
                
                window.speechSynthesis.speak(speech);
            }
