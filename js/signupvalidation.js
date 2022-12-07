function enableButton() {
    if (document.getElementById("checkboxsign").checked) {
        document.getElementById("empbttn").disabled = false;
    }else{
        document.getElementById("empbttn").disabled = true;
    }
    
    if (document.getElementById("checkboxsign").checked) {
        document.getElementById("jsbttn").disabled = false;
    }else{
        document.getElementById("jsbttn").disabled = true;
    }
}