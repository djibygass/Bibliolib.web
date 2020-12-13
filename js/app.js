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
  document.querySelector('.pres').innerHTML='Bienvenue sur le site officiel de BiblioliB.<br>'
}



  //call functions
  
  getMessage();
  getDateTime();
 


