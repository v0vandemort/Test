
document.getElementById("regForm").addEventListener("submit", function (event){

        let password = document.getElementById("passwordConfirm").value;
        let passwordConfirm = document.getElementById("passwordConfirmRepeat").value;
        let captchaToken = document.querySelector('input[name="smart-token"]').value;
        event.preventDefault();
        if (!captchaToken) {
            event.preventDefault();
            alert("Капча не пройдена");
            return false;
        } else if (password !== passwordConfirm) {
            event.preventDefault();
            alert("Пароли не совпадают");
            return false;
        }else{

        this.submit();
        console.log("form active");
        return true;
        }

});

