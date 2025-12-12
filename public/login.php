<?php

//LOGIN FILE TO START SESSION

    require_once __DIR__ . '/../includes/loginControl.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <link rel="stylesheet" href="css/login.css">
</head>
<body>
    <main>
        <section class="loginContainer">
            <article class="loginContent">
                <h1>Login <span>Adminsitracion</span></h1>
                <form action="#" method="POST" class="loginForm">
                    <?php if($message):  ?> <p><?= htmlspecialchars($message) ?></p> <?php endif ?>
                    <div class="formControl">
                        <label for="username">Username</label>
                        <input type="text" id="username" name="username" required>
                    </div>
                    <div class="formControl">
                        <label for="password">Password</label>
                        <input type="password" id="password" name="user_pass" required>
                    </div>
                    <button type="submit">Sign In</button>
                </form>
            </article>
        </section>
    </main>
</body>
</html>