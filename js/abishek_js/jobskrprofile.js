var jbskrPD = document.getElementsByClassName("jobskrUserPersonal");
var jbskrAD = document.getElementsByClassName("userAcademic");

var jbsel = document.getElementsByClassName("SelectPage");

console.log(jbsel);
function profileFilter(x){
    if(x==1){
        jbskrPD[0].style.display = "block";
        jbskrAD[0].style.display = "none";

        jbsel[0].classList.add('jbsactive');
        jbsel[1].classList.remove('jbsactive');
    }

    else if(x==2){
        jbskrPD[0].style.display = "none";
        jbskrAD[0].style.display = "block";

        jbsel[0].classList.remove('jbsactive');
        jbsel[1].classList.add('jbsactive');
    }
}