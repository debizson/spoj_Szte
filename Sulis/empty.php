
<?php

$name = "Új menüpont";

include('header.php');

?>
<aside>
    <form action="login.php" method="post">
        <label>Felhasználónév <input type="text"></label>
        <label>Jelszó <input type="password"></label>
        <input type="submit" value="Login">
    </form>
</aside>
<main>
    <pre>
    <?php print_r($_GET); ?>
    </pre>
</main>
</div>
</body>
</html>