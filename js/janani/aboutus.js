//Banner js part

var slideNumber = 1;
slidePrieview(slideNumber);

function increment(n) {
  slidePrieview(slideNumber += n);
}

function current(n) {
  slidePrieview(slideNumber = n);
}

function slidePrieview(n) {
  var i;

  var banner = document.getElementsByClassName("slide");

  var circle = document.getElementsByClassName("dot");

  if (n > banner.length) {
    slideNumber = 1
  }    

  if (n < 1) {
    slideNumber = banner.length
  }

  for (i = 0; i < banner.length; i++) {
    banner[i].style.display = "none";  
  }

  for (i = 0; i < circle.length; i++) {
    circle[i].className = circle[i].className.replace(" active", "");
  }

  banner[slideNumber-1].style.display = "block";  

  circle[slideNumber-1].className += " active";
  
}

//Banner js ends here