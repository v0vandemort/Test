// //
// // document.getElementById("regForm").addEventListener("submit", function (event){
// //
// //         event.preventDefault();
// //         let password = document.getElementById("passwordConfirm").value;
// //         let passwordConfirm = document.getElementById("passwordConfirmRepeat").value;
// //
// //         if(password!==passwordConfirm){
// //             alert("Пароли не совпадают")
// //             return false;
// //         }
// //
// //         return true;
// // });
//
// function checkPass() {
//
//     var xhttp = new XMLHttpRequest();
//     xhttp.onreadystatechange = function() {
//         if (this.readyState == 4 && this.status == 200) {
//             let password = document.getElementById("passwordConfirm").value;
//             let passwordConfirm = document.getElementById("passwordConfirmRepeat").value;
//             event.preventDefault();
//
//             if(password!==passwordConfirm){
//                 document.getElementById("passwordConfirm").innerHTML ="Пароли не совпадают";
//
//                 return false;
//             }
//
//         }
//     };
//     xhttp.open("GET", "../backend/php/"+page+".php", true);
//     xhttp.send();
// }

document.addEventListener('DOMContentLoaded', function () {
    var password = document.getElementById('passwordConfirm');
    var passwordConfirm = document.getElementById('passwordConfirmRepeat');
    var passwordError = document.getElementById('messageReg');

    password.addEventListener('input', validatePassword);
    passwordConfirm.addEventListener('input', validatePassword);

    function validatePassword() {
        var pass1 = password.value;
        var pass2 = passwordConfirm.value;

        if (pass1 !== pass2) {
            passwordError.textContent('Passwords do not match');
        } else {
            passwordError.textContent('Пароли совпадают');
        }
    }
});

//
// function checkPass(event) {
//
//
//     event.preventDefault();
//     let password = document.getElementById("passwordConfirm").value;
//     let passwordConfirm = document.getElementById("passwordConfirmRepeat").value;
//
//     if (password !== passwordConfirm) {
//         // event.preventDefault();
//
//         let xmr1 = new XMLHttpRequest();
//         xmr1.onreadystatechange = function() {
//             if (this.readyState == 4 && this.status == 200) {
//                 document.getElementById("messageReg").innerText=
//                     "Пароль неверный";
//             }
//         };
//         // xmr1.open(true);
//         xmr1.send();
//     } else {
//         let xhr = new XMLHttpRequest();
//         let formData = new FormData(document.getElementById("regForm"));
//
//         xhr.onreadystatechange = function () {
//             if (this.readyState == 4 && this.status == 200) {
//                 if (this.responseText.trim()==="Поздравляем с регистрацией"){
//
//                     document.getElementById("main").innerHTML =
//                         this.responseText;
//                     console.log(this.responseText);
//                 }else {
//                     alert("Ошибка. Пароли не совпадают")
//                     console.log(this.responseText);
//                 }
//
//             }
//         };
//         xhr.open("POST", "../backend/php/scripts/addUser.php", true);
//         xhr.send(formData);
//
//
//     }
//
// }
