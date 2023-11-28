<?php
require_once "../../header.php";
?>
<section >
    <h1 align="center">
        <?php
        echo("Авторизация");
        ?>
    </h1>
</section>

<section width="50%" maxwidth="50%" align="center">
    <div class="form" align="center">
        <form action="./scripts/checkLogin.php" class="login" align="center" metod="post">
            <label>Login: почта или телефон</label>
            <input name="login" required>
            <label>Password</label>
            <input name="password" type="password" required>
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
<?php
require_once "../../footer.php";
?>