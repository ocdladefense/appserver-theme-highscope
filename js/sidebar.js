
function openNav() {

    document.getElementById("openbtn").onclick = closeNav;  
    
  }
  
  function closeNav() {

    document.getElementById("openbtn").onclick = function () { openNav("55%")}; 
  }

  window.addEventListener("resize",() =>{
    if(document.body.clientWidth > 800){
      openbtn.style.display = "none";
    }
    if(document.body.clientWidth < 800){
//
    }
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