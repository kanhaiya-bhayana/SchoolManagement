var myInput = document.getElementById("psw");
var length = document.getElementById("length");

myInput.onfocus = function() {
    document.getElementById("message").style.display = "block";
  }

  myInput.onblur = function() {
    document.getElementById("message").style.display = "none";
  }
  myInput.onkeyup = function() {
 
 
    if(myInput.value.length >= 6) {
        length.classList.remove("invalid");
        length.classList.add("valid");
      } else {
        length.classList.remove("valid");
        length.classList.add("invalid");
      }
    }