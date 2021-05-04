
function openNav() {
    document.getElementById("mySidenav").style.display = "none";
    document.getElementById("openbtn").innerHTML = "&times;";
    document.getElementById("openbtn").style.fontSize.length = 25;
    document.getElementById("openbtn").onclick = closeNav;  
    document.getElementById("stage-content").style.backgroundColor = "rgba(0,0,0,0.4)";
    
  }
  
  function closeNav() {
    document.getElementById("mySidenav").style.display = "unset"
    document.getElementById("openbtn").innerHTML = "&#9776;";
    document.getElementById("openbtn").style.fontSize.length = 20;
    document.getElementById("openbtn").onclick = function () { openNav("40%")}; 
    document.getElementById("stage-content").style.backgroundColor = "rgba(0,0,0,0)";
    
  }

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