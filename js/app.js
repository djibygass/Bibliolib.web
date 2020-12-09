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
    document.querySelector('.hour').innerHTML = hours+':'+minutes+':'+seconds
    
  },1000)

}
function getMessage(){
  var theDate = new Date
  var hour = theDate.getHours()
  if (hour<=14 && hour>5){
    var txt ='Bonjour,'
  }
  else if (hour<18 && hour>14){
    var txt='Bon après-midi,'
  }
  else if(hour>18 || hour<5){
    var txt ='Bonsoir,'
  }
  document.querySelector('.pres').innerHTML= txt+' Bienvenue sur le site officiel de BiblioliB.<br>'
}



  //call functions
  
  getMessage();
  getDateTime();
 


