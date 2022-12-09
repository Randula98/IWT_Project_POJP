function loadData(value) {
    if(value=="sel1") {
        document.getElementById("vtitle").innerHTML = "Construction Worker";
        document.getElementById("vpara").innerHTML = "Ideally you should have multi skills, an understanding of construction processes and working safely on construction sites.";
        document.getElementById("preimg").src = "images/jobs/constructionw1.jpg";
        document.getElementById("jpreview").src.transitionDuration = "0.3s";
    }
    if(value=="sel2") {
        document.getElementById("vtitle").innerHTML = "Web Developer";
        document.getElementById("vpara").innerHTML = "We are looking for a front-end web developer who can develop, manage, optimize, customize WordPress-based websites.";
        document.getElementById("preimg").src = "images/jobs/webdeveloper1.jpg";
        document.getElementById("jpreview").src.transitionDuration = "0.3s";
    }
}