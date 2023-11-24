
function load(page) {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("main").innerHTML =
                this.responseText;
        }
    };
    xhttp.open("GET", "../backend/php/"+page+".php", true);
    xhttp.send();
}

function loadBase() {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementsByClassName("demo").innerHTML =
                this.responseText;
        }
    };
    xhttp.open("GET", "../connect.php", true);
    xhttp.send();
}