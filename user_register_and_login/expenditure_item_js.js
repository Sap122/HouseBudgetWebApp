
//check speech recognisition runing or not

if ('speechSynthesis' in window) {
    console.log('Speech recognition supported 😊');
    // code to handle recognition here
} else {
    console.log('Speech recognition not supported 😢');
    // code to handle error
}



//audio speech to text for fruit	      
   	      
function fruit_mic(){
   
      // new speech recognition object
   var SpeechRecognition = SpeechRecognition || webkitSpeechRecognition;
   var recognition = new SpeechRecognition();
                        
               
  // This runs when the speech recognition service returns result
     
    recognition.onresult = function(event) {
    var transcript = event.results[0][0].transcript;     
    document.getElementById("fruit").setAttribute('value',transcript);
             };
              
  // start recognition
    recognition.start();
}  

//audio speech to text for vegetable	      
   	      
function vege_mic(){
 
    // new speech recognition object
   var SpeechRecognition = SpeechRecognition || webkitSpeechRecognition;
   var recognition = new SpeechRecognition();
                          
               
  // This runs when the speech recognition service returns result
     
    recognition.onresult = function(event) {
    var transcript = event.results[0][0].transcript;
    var confidence = event.results[0][0].confidence;
    document.getElementById("vege").setAttribute('value',transcript);
             };
              
  // start recognition
    recognition.start();
}  

//audio speech to text for milk	      
   	      
function milk_mic(){
   //alert();
    // new speech recognition object
  var SpeechRecognition = SpeechRecognition || webkitSpeechRecognition;
   var recognition = new SpeechRecognition();
                          
               
  // This runs when the speech recognition service returns result
     
    recognition.onresult = function(event) {
    var transcript = event.results[0][0].transcript;
    var confidence = event.results[0][0].confidence;
  //  alert(transcript);
    document.getElementById("milk").setAttribute('value',transcript);
             };
              
  // start recognition
    recognition.start();
}  
  
//audio speech to text for massala	      
   	      
function massala_mic(){
    //alert();
    // new speech recognition object
  var SpeechRecognition = SpeechRecognition || webkitSpeechRecognition;
   var recognition = new SpeechRecognition();
                          
               
  // This runs when the speech recognition service returns result
     
    recognition.onresult = function(event) {
    var transcript = event.results[0][0].transcript;
    var confidence = event.results[0][0].confidence;
  //  alert(transcript);
    document.getElementById("massala").setAttribute('value',transcript);
             };
              
  // start recognition
    recognition.start();
}  

//audio speech to text for cereal	      
   	      
function cereal_mic(){
   //alert();
    // new speech recognition object
  var SpeechRecognition = SpeechRecognition || webkitSpeechRecognition;
   var recognition = new SpeechRecognition();
                          
               
  // This runs when the speech recognition service returns result
     
    recognition.onresult = function(event) {
    var transcript = event.results[0][0].transcript;
    var confidence = event.results[0][0].confidence;
   // alert(transcript);
    document.getElementById("cereal").setAttribute('value',transcript);
             };
              
  // start recognition
    recognition.start();
}  


//audio speech to text for fruit	      
   	      
function sugar_mic(){
    //alert();
    // new speech recognition object
  var SpeechRecognition = SpeechRecognition || webkitSpeechRecognition;
   var recognition = new SpeechRecognition();
                          
               
  // This runs when the speech recognition service returns result
     
    recognition.onresult = function(event) {
    var transcript = event.results[0][0].transcript;
    var confidence = event.results[0][0].confidence;
    // alert(transcript);
    document.getElementById("sugar").setAttribute('value',transcript);
             };
              
  // start recognition
    recognition.start();
}  

//audio speech to text for salt	      
   	      
function salt_mic(){
     //alert();
    // new speech recognition object
  var SpeechRecognition = SpeechRecognition || webkitSpeechRecognition;
   var recognition = new SpeechRecognition();
                          
               
  // This runs when the speech recognition service returns result
     
    recognition.onresult = function(event) {
    var transcript = event.results[0][0].transcript;
    var confidence = event.results[0][0].confidence;
     //alert(transcript);
    document.getElementById("salt").setAttribute('value',transcript);
             };
              
  // start recognition
    recognition.start();
}  

//audio speech to text for egg	      
   	      
function egg_mic(){
   //alert();
    // new speech recognition object
  var SpeechRecognition = SpeechRecognition || webkitSpeechRecognition;
   var recognition = new SpeechRecognition();
                          
               
  // This runs when the speech recognition service returns result
     
    recognition.onresult = function(event) {
    var transcript = event.results[0][0].transcript;
    var confidence = event.results[0][0].confidence;
    //alert(transcript);
    document.getElementById("egg").setAttribute('value',transcript);
             };
              
  // start recognition
    recognition.start();
}  

//audio speech to text for meat	      
   	      
function meat_mic(){
  //alert();
    // new speech recognition object
  var SpeechRecognition = SpeechRecognition || webkitSpeechRecognition;
   var recognition = new SpeechRecognition();
                          
               
  // This runs when the speech recognition service returns result
     
    recognition.onresult = function(event) {
    var transcript = event.results[0][0].transcript;
    var confidence = event.results[0][0].confidence;
    //alert(transcript);
    document.getElementById("meat").setAttribute('value',transcript);
             };
              
  // start recognition
    recognition.start();
}  

//audio speech to text for education	      
   	      
function education_mic(){
    //alert();
    // new speech recognition object
  var SpeechRecognition = SpeechRecognition || webkitSpeechRecognition;
   var recognition = new SpeechRecognition();
                          
               
  // This runs when the speech recognition service returns result
     
    recognition.onresult = function(event) {
    var transcript = event.results[0][0].transcript;
    var confidence = event.results[0][0].confidence;
    //alert(transcript);
    document.getElementById("education").setAttribute('value',transcript);
             };
              
  // start recognition
    recognition.start();
}  

//audio speech to text for clothing	      
   	      
function clothing_mic(){
    //alert();
    // new speech recognition object
  var SpeechRecognition = SpeechRecognition || webkitSpeechRecognition;
   var recognition = new SpeechRecognition();
                          
               
  // This runs when the speech recognition service returns result
     
    recognition.onresult = function(event) {
    var transcript = event.results[0][0].transcript;
    var confidence = event.results[0][0].confidence;
    //alert(transcript);
    document.getElementById("clothing").setAttribute('value',transcript);
             };
              
  // start recognition
    recognition.start();
}  

//audio speech to text for phone	      
   	      
function phone_mic(){
    //alert();
    // new speech recognition object
  var SpeechRecognition = SpeechRecognition || webkitSpeechRecognition;
   var recognition = new SpeechRecognition();
                          
               
  // This runs when the speech recognition service returns result
     
    recognition.onresult = function(event) {
    var transcript = event.results[0][0].transcript;
    var confidence = event.results[0][0].confidence;
    //alert(transcript);
    document.getElementById("phone").setAttribute('value',transcript);
             };
              
  // start recognition
    recognition.start();
}  

//audio speech to text for light	      
   	      
function light_mic(){
    //alert();
    // new speech recognition object
  var SpeechRecognition = SpeechRecognition || webkitSpeechRecognition;
   var recognition = new SpeechRecognition();
                          
               
  // This runs when the speech recognition service returns result
     
    recognition.onresult = function(event) {
    var transcript = event.results[0][0].transcript;
    var confidence = event.results[0][0].confidence;
    //alert(transcript);
    document.getElementById("light").setAttribute('value',transcript);
             };
              
  // start recognition
    recognition.start();
}  

//audio speech to text for cable	      
   	      
function cable_mic(){
   //alert();
    // new speech recognition object
  var SpeechRecognition = SpeechRecognition || webkitSpeechRecognition;
   var recognition = new SpeechRecognition();
                          
               
  // This runs when the speech recognition service returns result
     
    recognition.onresult = function(event) {
    var transcript = event.results[0][0].transcript;
    var confidence = event.results[0][0].confidence;
    //alert(transcript);
    document.getElementById("cable").setAttribute('value',transcript);
             };
              
  // start recognition
    recognition.start();
}  

//audio speech to text for gas	      
   	      
function gas_mic(){
    //alert();
    // new speech recognition object
  var SpeechRecognition = SpeechRecognition || webkitSpeechRecognition;
   var recognition = new SpeechRecognition();
                          
               
  // This runs when the speech recognition service returns result
     
    recognition.onresult = function(event) {
    var transcript = event.results[0][0].transcript;
    var confidence = event.results[0][0].confidence;
    //alert(transcript);
    document.getElementById("gas").setAttribute('value',transcript);
             };
              
  // start recognition
    recognition.start();
}  

//audio speech to text for rent	      
   	      
function rent_mic(){
    //alert();
    // new speech recognition object
  var SpeechRecognition = SpeechRecognition || webkitSpeechRecognition;
   var recognition = new SpeechRecognition();
                          
               
  // This runs when the speech recognition service returns result
     
    recognition.onresult = function(event) {
    var transcript = event.results[0][0].transcript;
    var confidence = event.results[0][0].confidence;
    //alert(transcript);
    document.getElementById("rent").setAttribute('value',transcript);
             };
              
  // start recognition
    recognition.start();
}  



//audio speech to text for traveling	      
   	      
function traveling_mic(){
    //alert();
    // new speech recognition object
  var SpeechRecognition = SpeechRecognition || webkitSpeechRecognition;
   var recognition = new SpeechRecognition();
                          
               
  // This runs when the speech recognition service returns result
     
    recognition.onresult = function(event) {
    var transcript = event.results[0][0].transcript;
    var confidence = event.results[0][0].confidence;
    //alert(transcript);
    document.getElementById("traveling").setAttribute('value',transcript);
             };
              
  // start recognition
    recognition.start();
}  

//audio speech to text for medical	      
   	      
function medical_mic(){
    //alert();
    // new speech recognition object
  var SpeechRecognition = SpeechRecognition || webkitSpeechRecognition;
   var recognition = new SpeechRecognition();
                          
               
  // This runs when the speech recognition service returns result
     
    recognition.onresult = function(event) {
    var transcript = event.results[0][0].transcript;
    var confidence = event.results[0][0].confidence;
    //alert(transcript);
    document.getElementById("medical").setAttribute('value',transcript);
             };
              
  // start recognition
    recognition.start();
}  

//audio speech to text for personal	      
   	      
function personal_mic(){
    //alert();
    // new speech recognition object
  var SpeechRecognition = SpeechRecognition || webkitSpeechRecognition;
   var recognition = new SpeechRecognition();
                          
               
  // This runs when the speech recognition service returns result
     
    recognition.onresult = function(event) {
    var transcript = event.results[0][0].transcript;
    var confidence = event.results[0][0].confidence;
    //alert(transcript);
    document.getElementById("personal").setAttribute('value',transcript);
             };
              
  // start recognition
    recognition.start();
}  

//audio speech to text for other	      
   	      
function other_mic(){
    //alert();
    // new speech recognition object
  var SpeechRecognition = SpeechRecognition || webkitSpeechRecognition;
   var recognition = new SpeechRecognition();
                          
               
  // This runs when the speech recognition service returns result
     
    recognition.onresult = function(event) {
    var transcript = event.results[0][0].transcript;
    var confidence = event.results[0][0].confidence;
   // alert(transcript);
    document.getElementById("other").setAttribute('value',transcript);
             };
              
  // start recognition
    recognition.start();
}  

////////////////////////////////////////////////////////////////////////////////
//AUDIO FOR IMAGE CLCIK 

//audio for fruit image
 
function fruit_amount(){

                var x1 = document.getElementById("fruit").value;
               // alert("fruit");
                let msg = "फल पर किये खर्च  " +x1 +"रुपए ";
                
                let speech = new SpeechSynthesisUtterance();
                speech.lang = "hi-IN";
                
                speech.text = msg;
                speech.volume = 1;
                speech.rate = 1;
                speech.pitch = 1;
                
                window.speechSynthesis.speak(speech);
                
}

//audio for vege image
 
function vege_amount(){

                var x1 = document.getElementById("vege").value;
               // alert("vege");
                let msg = "सब्जीयो  पर किये खर्च  " +x1 +"रुपए ";
                
                let speech = new SpeechSynthesisUtterance();
                speech.lang = "hi-IN";
                
                speech.text = msg;
                speech.volume = 1;
                speech.rate = 1;
                speech.pitch = 1;
                
                window.speechSynthesis.speak(speech);
                
}

//audio for milk image
 
function milk_amount(){

                var x1 = document.getElementById("milk").value;
               // alert("milk");
                let msg = "दूध  पर किये खर्च  " +x1 +"रुपए ";
                
                let speech = new SpeechSynthesisUtterance();
                speech.lang = "hi-IN";
                
                speech.text = msg;
                speech.volume = 1;
                speech.rate = 1;
                speech.pitch = 1;
                
                window.speechSynthesis.speak(speech);
                
}

//audio for massala image
 
function massala_amount(){

                var x1 = document.getElementById("massala").value;
               // alert("massala");
                let msg = "मसाला  पर किये खर्च  " +x1 +"रुपए ";
                
                let speech = new SpeechSynthesisUtterance();
                speech.lang = "hi-IN";
                
                speech.text = msg;
                speech.volume = 1;
                speech.rate = 1;
                speech.pitch = 1;
                
                window.speechSynthesis.speak(speech);
                
}

//audio for cereal image
 
function cereal_amount(){

                var x1 = document.getElementById("cereal").value;
               // alert("cereal");
                let msg = "अनाज और दाल  पर किये खर्च  " +x1 +"रुपए ";
                
                let speech = new SpeechSynthesisUtterance();
                speech.lang = "hi-IN";
                
                speech.text = msg;
                speech.volume = 1;
                speech.rate = 1;
                speech.pitch = 1;
                
                window.speechSynthesis.speak(speech);
                
}

//audio for sugar image
 
function sugar_amount(){

                var x1 = document.getElementById("sugar").value;
               // alert("sugar");
                let msg = "शक्कर  पर किये खर्च  " +x1 +"रुपए ";
                
                let speech = new SpeechSynthesisUtterance();
                speech.lang = "hi-IN";
                
                speech.text = msg;
                speech.volume = 1;
                speech.rate = 1;
                speech.pitch = 1;
                
                window.speechSynthesis.speak(speech);
                
}

//audio for salt image
 
function salt_amount(){

                var x1 = document.getElementById("salt").value;
               // alert("salt");
                let msg = "नमक  पर किये खर्च  " +x1 +"रुपए ";
                
                let speech = new SpeechSynthesisUtterance();
                speech.lang = "hi-IN";
                
                speech.text = msg;
                speech.volume = 1;
                speech.rate = 1;
                speech.pitch = 1;
                
                window.speechSynthesis.speak(speech);
                
}

//audio for egg image
 
function egg_amount(){

                var x1 = document.getElementById("egg").value;
               // alert("egg");
                let msg = "अंडा  पर किये खर्च  " +x1 +"रुपए ";
                
                let speech = new SpeechSynthesisUtterance();
                speech.lang = "hi-IN";
                
                speech.text = msg;
                speech.volume = 1;
                speech.rate = 1;
                speech.pitch = 1;
                
                window.speechSynthesis.speak(speech);
                
}

//audio for meat image
 
function meat_amount(){

                var x1 = document.getElementById("meat").value;
               // alert("meat");
                let msg = " मांस  पर किये खर्च  " +x1 +"रुपए ";
                
                let speech = new SpeechSynthesisUtterance();
                speech.lang = "hi-IN";
                
                speech.text = msg;
                speech.volume = 1;
                speech.rate = 1;
                speech.pitch = 1;
                
                window.speechSynthesis.speak(speech);
                
}

//audio for education image
 
function education_amount(){

                var x1 = document.getElementById("education").value;
                //alert("education");
                let msg = "स्कूल या कॉलेज  पर किये खर्च  " +x1 +"रुपए ";
                
                let speech = new SpeechSynthesisUtterance();
                speech.lang = "hi-IN";
                
                speech.text = msg;
                speech.volume = 1;
                speech.rate = 1;
                speech.pitch = 1;
                
                window.speechSynthesis.speak(speech);
                
}

//audio for clothes image
 
function clothes_amount(){

                var x1 = document.getElementById("clothes").value;
               // alert("clothes");
                let msg = "कपड़ो  पर किये खर्च  " +x1 +"रुपए ";
                
                let speech = new SpeechSynthesisUtterance();
                speech.lang = "hi-IN";
                
                speech.text = msg;
                speech.volume = 1;
                speech.rate = 1;
                speech.pitch = 1;
                
                window.speechSynthesis.speak(speech);
                
}

//audio for light image
 
function light_amount(){

                var x1 = document.getElementById("light").value;
               // alert("light");
                let msg = "लाइट बिल  पर किये खर्च  " +x1 +"रुपए ";
                
                let speech = new SpeechSynthesisUtterance();
                speech.lang = "hi-IN";
                
                speech.text = msg;
                speech.volume = 1;
                speech.rate = 1;
                speech.pitch = 1;
                
                window.speechSynthesis.speak(speech);
                
}

//audio for gas image
 
function gas_amount(){

                var x1 = document.getElementById("gas").value;
               // alert("gas");
                let msg = "गैस  बिल  पर किये खर्च  " +x1 +"रुपए ";
                
                let speech = new SpeechSynthesisUtterance();
                speech.lang = "hi-IN";
                
                speech.text = msg;
                speech.volume = 1;
                speech.rate = 1;
                speech.pitch = 1;
                
                window.speechSynthesis.speak(speech);
                
}

//audio for phone image
 
function phone_amount(){

                var x1 = document.getElementById("phone").value;
               // alert("phone");
                let msg = "फ़ोन पर किये खर्च  " +x1 +"रुपए ";
                
                let speech = new SpeechSynthesisUtterance();
                speech.lang = "hi-IN";
                
                speech.text = msg;
                speech.volume = 1;
                speech.rate = 1;
                speech.pitch = 1;
                
                window.speechSynthesis.speak(speech);
                
}

//audio for cable image
 
function cable_amount(){

                var x1 = document.getElementById("cable").value;
               // alert("cable");
                let msg = "केबल बिल या टीवी  पर किये खर्च  " +x1 +"रुपए ";
                
                let speech = new SpeechSynthesisUtterance();
                speech.lang = "hi-IN";
                
                speech.text = msg;
                speech.volume = 1;
                speech.rate = 1;
                speech.pitch = 1;
                
                window.speechSynthesis.speak(speech);
                
}

//audio for rent image
 
function rent_amount(){

                var x1 = document.getElementById("rent").value;
               // alert("rent");
                let msg = "किराया या रेंट  पर किये खर्च  " +x1 +"रुपए ";
                
                let speech = new SpeechSynthesisUtterance();
                speech.lang = "hi-IN";
                
                speech.text = msg;
                speech.volume = 1;
                speech.rate = 1;
                speech.pitch = 1;
                
                window.speechSynthesis.speak(speech);
                
}

//audio for travel image
 
function travel_amount(){

                var x1 = document.getElementById("traveling").value;
               // alert("travel");
                let msg = "यात्रा या सफर  पर किये खर्च  " +x1 +"रुपए ";
                
                let speech = new SpeechSynthesisUtterance();
                speech.lang = "hi-IN";
                
                speech.text = msg;
                speech.volume = 1;
                speech.rate = 1;
                speech.pitch = 1;
                
                window.speechSynthesis.speak(speech);
                
}

//audio for medical image
 
function medical_amount(){

                var x1 = document.getElementById("medical").value;
              //  alert("medical");
                let msg = "हॉस्पिटल  पर किये खर्च  " +x1 +"रुपए ";
                
                let speech = new SpeechSynthesisUtterance();
                speech.lang = "hi-IN";
                
                speech.text = msg;
                speech.volume = 1;
                speech.rate = 1;
                speech.pitch = 1;
                
                window.speechSynthesis.speak(speech);
                
}

//audio for personal image
 
function personal_amount(){

                var x1 = document.getElementById("personal").value;
              //  alert("personal");
                let msg = "खुद  पर किये खर्च  " +x1 +"रुपए ";
                
                let speech = new SpeechSynthesisUtterance();
                speech.lang = "hi-IN";
                
                speech.text = msg;
                speech.volume = 1;
                speech.rate = 1;
                speech.pitch = 1;
                
                window.speechSynthesis.speak(speech);
                
}

//audio for other image
 
function other_amount(){

                var x1 = document.getElementById("other").value;
              //  alert("other");
                let msg = " अन्य पर किये खर्च  " +x1 +"रुपए ";
                
                let speech = new SpeechSynthesisUtterance();
                speech.lang = "hi-IN";
                
                speech.text = msg;
                speech.volume = 1;
                speech.rate = 1;
                speech.pitch = 1;
                
                window.speechSynthesis.speak(speech);
                
}