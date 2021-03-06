function se(name){
   console.log(name)
   fetchSearchData(name)
}

function fetchSearchData(name){
   fetch('traitements/search.php',{
      method:'POST',
      body: new URLSearchParams('word= '+name)
   })
   .then(res => res.json())
   .then(res => viewSearchList(res))
   .catch(res => console.error('Error: ' + e))
}

function viewSearchList(data){
   
}
