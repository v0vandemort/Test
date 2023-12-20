function startGame() {
    var xhttps = new XMLHttpRequest();
    var formData = new FormData();
    var lastNum = document.getElementById('lastNum').value;
    var tries = document.getElementById('tries').value;

    formData.append('lastNum',lastNum)
    formData.append('tries',tries)

    xhttps.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("main").innerHTML =
                this.responseText;
        }
    };

    xhttps.open("POST", "./script/game.php", true);
    xhttps.send(formData);
}

function playGame() {
    var xhttp = new XMLHttpRequest();
    var formData = new FormData();
    var curNum = document.getElementById('curNum').value;

    formData.append('curNum',curNum)

    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("main").innerHTML =
                this.responseText;
        }
    };

    xhttp.open("POST", "./script/game.php", true);
    xhttp.send(formData);
}