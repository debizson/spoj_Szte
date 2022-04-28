
 
 




<form action="index.php" method="post">
        <label>Felhasználónév <input type="text" name="usr" placeholder=<?php echo $_SESSION['statusz'] ?>></label>
        <label>Jelszó <input type="password" name="p1" ></label>
        <input type="submit" value="Login">
        <div style="color:green; display:inline-block"><?php echo $_SESSION['uzcsi'] ?></div>
    </form>
    <div class = "log"><ul><li><a href="reg.php">Regisztráció</a></li></ul></div>
    <div class = "log"><ul><li><a href=<?php echo $_SESSION['kom'] ?>>Kommentek</a></li></ul></div>
    <div class = "log"><ul><li><a href=Star_Wars1_logout.php>Kijelentkezés</a></li></ul></div>
</div>

<div><img id="STKep" src="ST.jpg" alt="Star W.(képtérkép)"
          height="66" width="100" usemap="#g1" /></div>
<div><map id="g1" name="g1">
        <area alt = "puzzle"
              shape="rect"
              coords="5,7,30,48"
              href="puzzleleiras.php" />

        <area alt = "tábla"
              shape="rect"
              coords="39,28,60,58"
              href="table.php" />
        <area alt = "ürlap"
              shape="rect"
              coords="70,7,90,48"
              href="urlap.php" />
    </map></div>








