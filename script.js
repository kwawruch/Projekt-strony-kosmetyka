window.onload = function() {
    document.getElementById('loadani').className="an";
    document.getElementById('loadanime').className="opacme";
    document.getElementById('onloade').className+=" opacity";
}
var hidden = false;
window.onscroll = function() {
    scrollFunction()
};
function ShowMenu() {
    var x = document.getElementById("MenuButton");
    if(hidden==false)
    {
        x.className = x.className + " responsive";
        hidden = true; 
    }
    else {
        x.className = "";
        hidden = false;
    }
}
function scrollFunction() {
    var x = document.getElementById("headerjs");
    var y = document.getElementsByClassName("dropli");
    if (document.documentElement.scrollTop > 400) {
        x.className = "header sticky";
        y.className = "dropli sticky";
    } else {
        x.className = "header";
        y.className = "dropli";
    }
  }