<!DOCTYPE html>
<html>
    <head>
        <title>Store</title>
        <meta charset="utf-8" />
        <link href="index.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <div class="wrapper">
            <header>
                <a href="index.php">Главная</a>
            </header>
            <hr/>
            <content>
                <form method="POST">
                    <h3>Форма ввода данных</h3>
                    <p>email: <input type="text" name="email" /></p>
                    <p>password: <input type="password" name="pass" /></p>
                    <input type="submit" value="Зарегистрироваться">
                    <?php
                    include 'db.php';

                    $email = '';
                    $password = '';

                    if(isset($_POST["email"]) and isset($_POST["pass"])){
                    
                        $email = $_POST["email"];
                        $password = $_POST["pass"];
                        if(addUser($email, $password)){
                            setcookie("email", $email);
                            setcookie("password", $password);
                        }else{
                            echo "<br>Пользователь с таким логином уже зарегистрирован!";
                        }

                        header('Location: index.php');
                    }
                    ?>
                </form>
            </content>
        </div>
    </body>
</html>