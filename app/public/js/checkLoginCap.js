
document.getElementById("logForm").addEventListener("submit", function (event){


        let captchaToken = document.querySelector('input[name="smart-token"]').value;
        event.preventDefault();
        if (!captchaToken) {
            event.preventDefault();
            alert("Капча не пройдена");
            return false;

        }else{

        this.submit();
        console.log("form active");
        return true;
        }

});

