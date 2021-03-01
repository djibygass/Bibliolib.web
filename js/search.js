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
   const postWrapper = document.querySelector(".post-wrapper")
   postWrapper.innerHTML = ""
   for(let i = 0; i < data.length; i++){

      const div = document.createElement('div')
      div.classList.add('post')

      const img = document.createElement('img')
      img.classList.add('thumbnail')
      img.src = "img/"+ data[i]["photo"]

      const div1 = document.createElement('div')
      div1.classList.add('post-preview')

      const div2 = document.createElement('div')
      div2.classList.add('desc')

      const h5 = document.createElement('h5')
      h5.classList.add('post-tittle')
      h5.title = "Titre du livre"
      h5.innerHTML = data[i]["titre"]

      const p = document.createElement('p')
      p.title = "description"
      p.innerHTML = data[i]["description"]

      const a = document.createElement('a')
      a.href = "espacemembre.php?idemprunt="+ data[i]["id_livres"]
      
      const button = document.createElement('button')
      button.classList.add('transparent')
      
      button.innerHTML = "<span class='black'>Emprunter</span>"
      
      div2.appendChild(h5)
      div2.appendChild(p)
      div1.appendChild(div2)
      div1.appendChild(a)
      div1.appendChild(button)
      div.appendChild(img)
      div.appendChild(div1)
      postWrapper.style.display = "grid"
      postWrapper.appendChild(div)
     
   }
   if(data.length == 0){
      const h2 = document.createElement('h2')
      h2.classList.add('display')
      h2.innerHTML = "Aucun titre retrouvé.."
      postWrapper.style.display = "flex"
      postWrapper.appendChild(h2)
   }

}
