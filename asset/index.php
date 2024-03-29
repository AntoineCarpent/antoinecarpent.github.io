<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projet GMAE</title>
    <link rel="stylesheet" href="./style/style.css">
</head>
<?php include './classes/verification.php'; ?>
<body id="body-index">
    <header>
        <img src="./images/logo_png.png" alt="logo">
    </header>
    <main>
        <div class="container">
            <div class="container_login">
                <div class="login">
                    <form action="" method="POST">
<!------------------ ID user ------------------>
                        <label for="user">ID user </label>
                            <span><?php $verification = new Verification();$userAdmin = $verification->checkUser();
                            echo $userAdmin; ?></span>
                        <input type="text" name="user" id="user">
<!------------------ Password ------------------>
                        <label for="password">Password</label>
                            <span><?php 
                            $passwordAdmin = $verification->checkPassword();
                            echo $passwordAdmin; ?></span>
                        <input type="password" name="password" id="password">
<!------------------ Bouttons ------------------>                  
                        <input type="submit" name="submit" id="submit">
                        
                    </form>
                </div>
            </div>
        </div>
     </main>
</body>
</html>