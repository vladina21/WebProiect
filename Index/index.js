var navLinks = document.getElementById("navLinks");
function showMenu() {
  navLinks.style.right = "0";
}

function hideMenu() {
  navLinks.style.right = "-200px";
}

const goTopBtn=document.querySelector('.go-top-btn');
window.addEventListener('scroll', checkHeight)
function checkHeight(){
  if(window.scrollY>200){
    goTopBtn.style.display="flex"
  }else{
    goTopBtn.style.display="none"
  }
}

goTopBtn.addEventListener('click', ()=> {
  window.scrollTo({
    top:0,
    behavior: "smooth"
  })
})