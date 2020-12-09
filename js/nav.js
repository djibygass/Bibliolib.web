const navSlide = () =>{
  const burger = document.querySelector('.burger')
  const nav = document.querySelector('.nav-links')
  console.log('dd')
  burger.addEventListener('click', () => {
    nav.classList.toggle("nav-active")
    console.log('ooooo')
  })
}

navSlide()