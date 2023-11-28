<?php
require_once "../../header.php";
?>
<section >
    <h1 align="center">
        <?php
        echo("Регистрация");
        ?>
    </h1>
</section>
<section width="50%" maxwidth="50%" align="center">
    <div class="form" align="center">
        <form  class="login" align="center" id="regForm" method="POST" >
            <label>Email</label>
            <input name="email" required>

            <label>Phone</label>
            <span style="font-size: 0.8em; color: #888;">Введите номер без 8 или +7</span>
            <input name="phone" type="text" pattern="[0-9]{10}" ="Введите 10 цифр, без +7 и 8" required>


            <label>First Name</label>
            <input name="firstName" required>

            <label>Last name</label>
            <input name="lastName" required>

            <label>BirthDay</label>
            <input name="birthday" type="date" required>

            <label>Password</label>
            <input name="password" type="password" id="passwordConfirm" required>
            <label>Repeat password</label>
            <input name="passwordConfirm" type="password" id="passwordConfirmRepeat" required>

            <span id="messageReg" style="font-size: 0.8em; color: #888;">
                <?php
                    if (isset($_SESSION['message'])){
                        echo ($_SESSION['message']);
                    }
                ?>
            </span>


            <label >
                <?php
                if (isset($_SESSION['message'])){
                    echo ($_SESSION['message']);
                }
                ?>
            </label>

            <button type="submit" >Зарегистрироваться</button>
        </form>
    </div>
</section>

<?php
require_once "../../footer.php";
?>