<?php include_once "./components/head.php" ?>

<body>
    <main class="main-home">
        <div class="home-container">
            <div class="home-box">
                <?php include_once "./components/navbar.php" ?>

                <form class="login-user-form" method="post" action="#">
                    <div class="login-user-inputs">
                        <div>
                            <label for="email-login">Email</label>
                            <input name="email-login" type="email">
                        </div>
                        <div>
                            <label for="password-login">Password</label>
                            <input name="password-login" type="password">
                        </div>

                        <input type="submit" value="Logar">
                    </div>
                </form>
            </div>
        </div>
    </main>
</body>

</html>