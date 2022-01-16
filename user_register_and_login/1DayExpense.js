
//audio for fruit image
 
function fruit_mic(){
               
               
                var x1 = document.getElementById("fruit").value;
               // alert("fruit");
                let msg = "आज के दिन आपने फल पर    " +x1+ "रुपए खर्च किये " ;
                
                let speech = new SpeechSynthesisUtterance();
                speech.lang = "hi-IN";
                
                speech.text = msg;
                speech.volume = 1;
                speech.rate = 1;
                speech.pitch = 1;
                
                window.speechSynthesis.speak(speech);
                
}

//audio for vege image
 
function vege_mic(){

                var x1 = document.getElementById("vege").value;
                //alert("vege");
                let msg = "आज के दिन आपने सब्जी  पर   " +x1+ "रुपए खर्च किये ";
                
                let speech = new SpeechSynthesisUtterance();
                speech.lang = "hi-IN";
                
                speech.text = msg;
                speech.volume = 1;
                speech.rate = 1;
                speech.pitch = 1;
                
                window.speechSynthesis.speak(speech);
                
}

//audio for milk image
 
function milk_mic(){

                var x1 = document.getElementById("milk").value;
               // alert("milk");
                let msg = "आज के दिन आपने दूध पर    " +x1+ "रुपए खर्च किये ";
                
                let speech = new SpeechSynthesisUtterance();
                speech.lang = "hi-IN";
                
                speech.text = msg;
                speech.volume = 1;
                speech.rate = 1;
                speech.pitch = 1;
                
                window.speechSynthesis.speak(speech);
                
}

//audio for massala image
 
function massala_mic(){

                var x1 = document.getElementById("massala").value;
             //   alert("massala");
                let msg = "आज के दिन आपने मसाले  पर  " +x1+ "रुपए खर्च किये ";
                
                let speech = new SpeechSynthesisUtterance();
                speech.lang = "hi-IN";
                
                speech.text = msg;
                speech.volume = 1;
                speech.rate = 1;
                speech.pitch = 1;
                
                window.speechSynthesis.speak(speech);
                
}

//audio for cereal image
 
function cereal_mic(){

                var x1 = document.getElementById("cereal").value;
             //   alert("cereal");
                let msg = "आज के दिन आपने  अनाज और दाल  पर  " +x1+ "रुपए खर्च किये "; 
                
                let speech = new SpeechSynthesisUtterance();
                speech.lang = "hi-IN";
                
                speech.text = msg;
                speech.volume = 1;
                speech.rate = 1;
                speech.pitch = 1;
                
                window.speechSynthesis.speak(speech);
                
}

//audio for sugar image
 
function sugar_mic(){

                var x1 = document.getElementById("sugar").value;
             //   alert("sugar");
                let msg = "आज के दिन आपने शक्कर पर  " +x1+ "रुपए खर्च किये "; 
                
                let speech = new SpeechSynthesisUtterance();
                speech.lang = "hi-IN";
                
                speech.text = msg;
                speech.volume = 1;
                speech.rate = 1;
                speech.pitch = 1;
                
                window.speechSynthesis.speak(speech);
                
}

//audio for salt image
 
function salt_mic(){

                var x1 = document.getElementById("salt").value;
            //    alert("salt");
                let msg = "आज के दिन आपने नमक  पर  " +x1+ "रुपए खर्च किये ";                
                let speech = new SpeechSynthesisUtterance();
                speech.lang = "hi-IN";
                
                speech.text = msg;
                speech.volume = 1;
                speech.rate = 1;
                speech.pitch = 1;
                
                window.speechSynthesis.speak(speech);
                
}

//audio for egg image
 
function egg_mic(){

                var x1 = document.getElementById("egg").value;
           //     alert("egg");
                let msg = "आज के दिन आपने  अंडे  पर  " +x1+ "रुपए खर्च किये ";
                
                let speech = new SpeechSynthesisUtterance();
                speech.lang = "hi-IN";
                
                speech.text = msg;
                speech.volume = 1;
                speech.rate = 1;
                speech.pitch = 1;
                
                window.speechSynthesis.speak(speech);
                
}

//audio for meat image
 
function meat_mic(){

                var x1 = document.getElementById("meat").value;
           //     alert("meat");
                let msg = "आज के दिन आपने मांस   पर  " +x1+ "रुपए खर्च किये ";
                
                let speech = new SpeechSynthesisUtterance();
                speech.lang = "hi-IN";
                
                speech.text = msg;
                speech.volume = 1;
                speech.rate = 1;
                speech.pitch = 1;
                
                window.speechSynthesis.speak(speech);
                
}

//audio for education image
 
function education_mic(){

                var x1 = document.getElementById("education").value;
           //     alert("education");
                let msg = "आज के दिन आपने स्कूल या कॉलेज  पर  " +x1+ "रुपए खर्च किये ";
                
                let speech = new SpeechSynthesisUtterance();
                speech.lang = "hi-IN";
                
                speech.text = msg;
                speech.volume = 1;
                speech.rate = 1;
                speech.pitch = 1;
                
                window.speechSynthesis.speak(speech);
                
}

//audio for clothes image
 
function clothes_mic(){

                var x1 = document.getElementById("clothes").value;
           //     alert("clothes");
                let msg = "आज के दिन आपने कपड़ो  पर  " +x1+ "रुपए खर्च किये ";
                
                let speech = new SpeechSynthesisUtterance();
                speech.lang = "hi-IN";
                
                speech.text = msg;
                speech.volume = 1;
                speech.rate = 1;
                speech.pitch = 1;
                
                window.speechSynthesis.speak(speech);
                
}

//audio for light image
 
function light_mic(){

                var x1 = document.getElementById("light").value;
           //     alert("light");
                let msg = "आज के दिन आपने लाइट बिल  पर  " +x1+ "रुपए खर्च किये ";
                
                let speech = new SpeechSynthesisUtterance();
                speech.lang = "hi-IN";
                
                speech.text = msg;
                speech.volume = 1;
                speech.rate = 1;
                speech.pitch = 1;
                
                window.speechSynthesis.speak(speech);
                
}

//audio for gas image
 
function gas_mic(){

                var x1 = document.getElementById("gas").value;
          //      alert("gas");
                let msg = "आज के दिन आपने गैस  बिल  पर  " +x1+ "रुपए खर्च किये ";
                
                let speech = new SpeechSynthesisUtterance();
                speech.lang = "hi-IN";
                
                speech.text = msg;
                speech.volume = 1;
                speech.rate = 1;
                speech.pitch = 1;
                
                window.speechSynthesis.speak(speech);
                
}

//audio for phone image
 
function phone_mic(){

                var x1 = document.getElementById("phone").value;
          //      alert("phone");
                let msg = "आज के दिन आपने  फ़ोन  पर  " +x1+ "रुपए खर्च किये ";
                
                let speech = new SpeechSynthesisUtterance();
                speech.lang = "hi-IN";
                
                speech.text = msg;
                speech.volume = 1;
                speech.rate = 1;
                speech.pitch = 1;
                
                window.speechSynthesis.speak(speech);
                
}

//audio for cable image
 
function cable_mic(){

                var x1 = document.getElementById("cable").value;
          //      alert("cable");
                let msg = "आज के दिन आपने  केबल बिल या टीवी  पर  " +x1+ "रुपए खर्च किये ";
                
                let speech = new SpeechSynthesisUtterance();
                speech.lang = "hi-IN";
                
                speech.text = msg;
                speech.volume = 1;
                speech.rate = 1;
                speech.pitch = 1;
                
                window.speechSynthesis.speak(speech);
                
}

//audio for rent image
 
function rent_mic(){

                var x1 = document.getElementById("rent").value;
          //      alert("rent");
                let msg = "आज के दिन आपने  किराया या रेंट  पर  " +x1+ "रुपए खर्च किये ";
                
                let speech = new SpeechSynthesisUtterance();
                speech.lang = "hi-IN";
                
                speech.text = msg;
                speech.volume = 1;
                speech.rate = 1;
                speech.pitch = 1;
                
                window.speechSynthesis.speak(speech);
                
}

//audio for travel image
 
function traveling_mic(){

                var x1 = document.getElementById("traveling").value;
           //     alert("travel");
                let msg = "आज के दिन आपने  यात्रा या सफर  पर  " +x1+ "रुपए खर्च किये ";
                
                let speech = new SpeechSynthesisUtterance();
                speech.lang = "hi-IN";
                
                speech.text = msg;
                speech.volume = 1;
                speech.rate = 1;
                speech.pitch = 1;
                
                window.speechSynthesis.speak(speech);
                
}

//audio for medical image
 
function medical_mic(){

                var x1 = document.getElementById("medical").value;
          //      alert("medical");
                let msg = "आज के दिन आपने हॉस्पिटल पर  " +x1+ "रुपए खर्च किये " ;
                
                let speech = new SpeechSynthesisUtterance();
                speech.lang = "hi-IN";
                
                speech.text = msg;
                speech.volume = 1;
                speech.rate = 1;
                speech.pitch = 1;
                
                window.speechSynthesis.speak(speech);
                
}

//audio for personal image
 
function personal_mic(){

                var x1 = document.getElementById("personal").value;
          //      alert("personal");
                let msg = "आज के दिन आपने खुद  पर  " +x1+ "रुपए खर्च किये " ;
                
                let speech = new SpeechSynthesisUtterance();
                speech.lang = "hi-IN";
                
                speech.text = msg;
                speech.volume = 1;
                speech.rate = 1;
                speech.pitch = 1;
                
                window.speechSynthesis.speak(speech);
                
}

//audio for other image
 
function other_mic(){

                var x1 = document.getElementById("other").value;
         //       alert("other");
                let msg = "आज के दिन आपने  अन्य  पर  " +x1+ "रुपए खर्च किये " ;
                
                let speech = new SpeechSynthesisUtterance();
                speech.lang = "hi-IN";
                
                speech.text = msg;
                speech.volume = 1;
                speech.rate = 1;
                speech.pitch = 1;
                
                window.speechSynthesis.speak(speech);
                
}