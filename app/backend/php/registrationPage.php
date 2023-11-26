<section >
    <h1 align="center">
        <?php
        echo("Регистрация");
        ?>
    </h1>
</section>
<section width="50%" maxwidth="50%" align="center">
    <div class="form" align="center">
        <form action="./scripts/addUser.php" class="login" align="center" metod="post">
            <label>Email</label>
            <input name="email" required>

            <label>Phone</label>
            <input name="phone" required>

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



            <label>
                <?php
                if (isset($_SESSION['message'])){
                    echo ($_SESSION['message']);
                }
                ?>
            </label>

            <button type="submit" onclick="">Войти</button>
        </form>
    </div>
</section>