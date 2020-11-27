//procedural



//selectors
const hourDiv = document.querySelector('.hour')
const message = document.querySelector('.pres') 


//events

//functions
function getDateTime(){

  
  setInterval(()=>{
    var theDate = new Date
    var hours = theDate.getHours()
    if (hours<10){
      var hours = '0' + hours
    } 
    var minutes = theDate.getMinutes()
    if (minutes<10){
      var minutes = '0' + minutes
    }
    var seconds = theDate.getSeconds()
    if (seconds<10){
      var seconds = '0' + seconds
    }
    hourDiv.innerHTML = hours+':'+minutes+':'+seconds
    
  },1000)

}
function getMessage(){
  var theDate = new Date
  var hour = theDate.getHours()
  if (hour<14 && hour>5){
    var txt ='Bonjour,'
  }
  else if (hour>14 && hour<18){
    var txt='Bon Après midi,'
  }
  else{
    var txt ='Bonsoir,'
  }
  message.innerHTML= txt+" Bienvenue sur notre site de bibliothèque en ligne.<br> Veuillez cliquez sur l'icon d'en haut à droite pour continuer l'aventure. "
}








//call functions
getMessage()
getDateTime()
