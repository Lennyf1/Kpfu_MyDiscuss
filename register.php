<?php
require_once("connection.php");
include("header-sign.php");
$con = mysqli_connect($host, $username, $password, $db);
?>

<?php

if(isset($_POST["register"])){

    if(!empty($_POST['full_name']) && !empty($_POST['email']) && !empty($_POST['username']) && !empty($_POST['password'])) {
        $full_name= htmlspecialchars($_POST['full_name']);
        $email=htmlspecialchars($_POST['email']);
        $username=htmlspecialchars($_POST['username']);
        $password=htmlspecialchars($_POST['password']);
        $query=mysqli_query($con, "SELECT * FROM usertbl WHERE username='".$username."'");
        $numrows=mysqli_num_rows($query);
        if($numrows==0)
        {
            $sql="INSERT INTO usertbl (full_name, email, username,password) VALUES('$full_name','$email', '$username', '$password')";
            $result=mysqli_query($con, $sql);
            if($result){
                $message = "Учетная запись успешно создана";
            } else {
                $message = "Не удалось записать данные!";
            }
        } else {
            $message = "Это имя пользователя уже существует! Пожалуйста, попробуйте другой!";
        }
    } else {
        $message = "Все поля обязательны для заполнения!";
    }
}
?>

<?php if (!empty($message)) {echo '<p class="warnir">'  . "MESSAGE: ". $message . "</p>";} ?>
<div class="container mregister">
    <div id="login">
        <p class="headr">Регистрация</p>
        <form class="forms" action="register.php" id="registerform" method="post"name="registerform">
            <p><label for="user_login">Полное имя<br>
                    <input class="input" id="full_name" name="full_name"size="32"  type="text" value=""></label></p>
            <p><label for="user_pass">E-mail<br>
                    <input class="input" id="email" name="email" size="32"type="email" value=""></label></p>
            <p><label for="user_pass">Имя пользователя<br>
                    <input class="input" id="username" name="username"size="20" type="text" value=""></label></p>
            <p><label for="user_pass">Пароль<br>
                    <input class="input" id="password" name="password"size="32"   type="password" value=""></label></p>
            <p class="submit"><input class="button_reg" id="register" name= "register" type="submit" value="Зарегистрироваться"></p>
            <p class="regtext">Уже зарегистрированы? <a href= "login.php">Вход в аккаунт</a></p>
        </form>
    </div>
</div>
</body>
</html>

