<?php
session_start();
?>
<?php require ('header.php'); ?>
<main>
    <div class ="account-label">
        <p class="personal-account">
            Personal account
        </p>
    </div>
    <section class="account-avatar">
        <img class="avatar" src="img/avatar.png" width="194" height="194" alt="Avatar">
        <button class="add-avatar" type="button">+</button>
        <p class="avatar-text">Add photo to your profile</p>
    </section>
    <div class="account-fields">
        <section class="nickname-field">
            <p>Nickname:</p>
            <form class="nickname form" action="" method="get">
                <button class="pen-button" type="submit"><img class="pen-img" src="img/pen.png" width="30" height="30" alt="Edit"></button>
                <input class="nickname input" name="s" placeholder="Enter nickname" type="search">
            </form>
        </section>
        <section class="name-field">
            <p>Name:</p>
            <form class="name form" action="" method="get">
                <button class="pen-button" type="submit"><img class="pen-img" src="img/pen.png" width="30" height="30" alt="Edit"></button>
                <input class="name input" name="s" placeholder="Enter name" type="search">
            </form>
        </section>
        <section class="surname-field">
            <p>Surname:</p>
            <form class="surname form" action="" method="get">
                <button class="pen-button" type="submit"><img class="pen-img" src="img/pen.png" width="30" height="30" alt="Edit"></button>
                <input class="surname input" name="s" placeholder="Enter surname" type="search">
            </form>
        </section>
        <section class="mail-field">
            <p>E-mail:</p>
            <form class="mail form" action="" method="get">
                <button class="pen-button" type="submit"><img class="pen-img" src="img/pen.png" width="30" height="30" alt="Edit"></button>
                <input class="mail input" name="s" placeholder="Enter e-mail" type="search">
            </form>
        </section>
        <section class="password-field">
            <p>Password:</p>
            <form class="password form" action="" method="get">
                <button class="pen-button" type="submit"><img class="pen-img" src="img/pen.png" width="30" height="30" alt="Edit"></button>
                <input class="password input" name="s" placeholder="Enter nickname" type="search">
            </form>
        </section>
    </div>
    <div class="apply">
        <button class="apply-button" type="submit">Apply changes</button>
    </div>
</main>
<?php require ('footer.php'); ?>
