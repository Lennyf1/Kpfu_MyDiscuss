<?php
require_once("connection.php");
include("header-sign.php");
$con = mysqli_connect($host, $username, $password, $db);?>

<?php
session_start();
?>

<?php require_once("connection.php"); ?>
<?php include("header-sign.php"); ?>
<?php

if(isset($_SESSION["session_username"])){

    header("Location: intropage.php");
}

if(isset($_POST["login"])){

    if(!empty($_POST['username']) && !empty($_POST['password'])) {
        $username=htmlspecialchars($_POST['username']);
        $password=htmlspecialchars($_POST['password']);
        $query =mysqli_query($con,"SELECT * FROM usertbl WHERE username='".$username."' AND password='".$password."'");
        $numrows=mysqli_num_rows($query);
        if($numrows!=0)
        {
            while($row=mysqli_fetch_assoc($query))
            {
                $dbusername=$row['username'];
                $dbpassword=$row['password'];
            }
            if($username == $dbusername && $password == $dbpassword)
            {

                $_SESSION['session_username']=$username;

                header("Location: intropage.php");
            }
        } else {


            echo  "Неправильный Логин или Пароль";
        }
    } else {
        $message = "All fields are required!";
    }
}
?>
<div class="container mlogin">
    <div id="login">
        <div class="logotype">
            <a class="active-logo" href="#">
                <h1>MyDiscuss</h1>
            </a>
        </div>
        <form class="container-forms" action="" id="loginform" method="post"name="loginform">
            <p class="forms_log"><label for="user_login">Имя пользователя<br>
                    <input class="input" id="username" name="username"size="20"
                           type="text" value=""></label></p>
            <p class="forms_log"><label for="user_pass">Пароль<br>
                    <input class="input" id="password" name="password"size="20"
                           type="password" value=""></label></p>
            <p class="submit"><input class="button" name="login"type= "submit" value="Log In"></p>
            <p class="regtext">Еще не зарегистрированы?<a href= "register.php">Регистрация</a></p>
        </form>
    </div>
</div>

</body>
</html>
