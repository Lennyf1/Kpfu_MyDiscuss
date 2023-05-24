
</main>
<footer class="main-footer">
    <div class="login-field" >
    <?php if(!isset($_SESSION["session_username"])):
    header("location:login.php"); ?>
        <?php  else: ?>
        <a class="login-button" href="logout.php"><span><?php echo $_SESSION['session_username'];?> / Logout</a>
    </div>
    <?php endif; ?>
    <div class="metric-users">
        <p class="active-users">Active users: 139</p>
        <ul class="users-list">
            <li class="users-item">Пули от Бабули</li>
            <li class="users-item">realniy redan</li>
            <li class="users-item">A.y.E.???</li>
            <li class="users-item">ЛюблюЧарон</li>
    </div>
</footer>
</body>
</html>
