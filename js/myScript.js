window.onscroll = function () {
  scrollFunction()
};

function scrollFunction() {
  if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
    document.getElementById("header").style.backgroundColor = "#1f252ef7";
    document.getElementById("nbl").src = "images/logo.png";
  }
  else {
    document.getElementById("header").style.backgroundColor = "transparent";
    document.getElementById("nbl").src = "images/logod.png";
  }

  if (document.body.scrollTop > 150 || document.documentElement.scrollTop > 150) {
    document.getElementById("navbar2").style.visibility = "visible";
  }
  else {
    document.getElementById("navbar2").style.visibility = "hidden";
  }

  if (document.body.scrollTop > 350 || document.documentElement.scrollTop > 350) {
    document.getElementById("searchbar1").style.visibility = "visible";
    document.getElementById("searchbar2").style.visibility = "hidden";
  }
  else {
    document.getElementById("searchbar1").style.visibility = "hidden";
    document.getElementById("searchbar2").style.visibility = "visible";
  }

}
/*
const container = document.querySelector('.preloader');

window.addEventListener('load', () => {
  container.classList.add('hide-preloader');
})
*/