
function openNav() {
    document.getElementById("container-left").classList.add("sidenav-mobile-open");
    menu.innerHTML = "&times;";
    document.getElementById("menu").onclick = closeNav;  
    
  }
  
  function closeNav() {
    document.getElementById("container-left").classList.remove("sidenav-mobile-open");
    menu.innerHTML = "&#9776;";
    document.getElementById("menu").onclick = openNav; 
  }

  window.addEventListener("resize",() =>{
    if(document.body.clientWidth > 800){
      document.getElementById("container-left").classList.remove("sidenav-mobile-open");
      menu.innerHTML = "&#9776;";
      document.getElementById("menu").onclick = openNav; 
    }
    // if(document.body.clientWidth <= 800){

    // }
  });











  window.onload = function(){
    var dropdown = document.getElementsByClassName("dropdown-btn");
    var i;
    
    for (i = 0; i < dropdown.length; i++) {
      dropdown[i].addEventListener("click", function() {
      this.classList.toggle("active");
      var dropdownContent = this.nextElementSibling;
      if (dropdownContent.style.display === "block") {
        dropdownContent.style.display = "none";
      } else {
        dropdownContent.style.display = "block";
      }
      });
    };
  }