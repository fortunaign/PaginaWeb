var xhttp = new XMLHttpRequest();
document.getElementById("sect").innerHTML = this.responseText;
xhttp.open("GET", "nav.html", true);
xhttp.send();