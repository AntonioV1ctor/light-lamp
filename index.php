<?php include_once "./components/head.php"; ?>
<?php
$url = "/pages/admin.php";
$erro = "";

if (isset($_POST["login"])) {
    $email = "antoniovictor.me@gmail.com";
    $senha = "12345678";

    if ($_POST["email-login"] === $email && $_POST["password-login"] === $senha) {
        header("Location: $url");
        die();
    } else {
        $erro = "Credenciais inválidas.";
    }
}
?>

<body>
    <main class="main-home">
        <div class="home-container">
            <div class="home-box">
                <?php include_once "./components/navbar.php"; ?>

                <form class="login-user-form" method="post" action="index.php">
                    <?php if ($erro): ?>
                        <p style="color: red;"><?= $erro ?></p>
                    <?php endif; ?>

                    <div class="login-user-inputs">
                        <div class="user-input-div">
                            <label for="email-login">Email</label>
                            <i class="fa-solid fa-envelope email-icon"></i>
                            <input class="default-input-text" name="email-login" type="email" required>
                        </div>
                        <div class="user-input-div">
                            <label for="password-login">Password</label>
                            <i class="fa-solid fa-key pass-icon"></i>
                            <input class="default-input-text" name="password-login" type="password" required>
                        </div>

                        <input class="default-input-submit" type="submit" value="Logar" name="login">
                    </div>
                </form>
            </div>
        </div>
    </main>
</body>

</html>
