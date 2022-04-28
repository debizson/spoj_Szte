<?php
session_start();



if (!isset($_SESSION['statusz']))
    $_SESSION['statusz'] = "Vendéglátogató";


?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Feldolgoz</title>
    <link rel="stylesheet" href="xmy_p.css" type="text/css">
</head>


<body>
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

<div style="color: #00aa00"><?php echo "A felhasználó: ". $_SESSION['statusz'] ?></div>
<br />
<br />

<h1 > Az ön válaszai: </h1>
<div id = "adatKiir"> </div>
<p> <br /> Vagyis: <br /> </p>
<div id = "adatKiirformula0"> </div>
<div id = "adatKiirformula1" ><br /> </div>
<div>(a+1)<sup>2</sup>
    megfelelője :</div>
<?php if (@$_GET['jegy'] == "a^22a1"){ ?>
    <div style="color: #00aa00"> Helyes válasz: a^2 + 2a + 1</div>
<?php } else  { ?>
    <div style="color: #aa0000">  Az ön válasza helytelen </div>
<?php } ?>
<br />


<div> Mi 105 osztói = </div>
<?php if (@$_GET['a105mod3']){
    if($_GET['a105mod3'] = "on") ?>
    <div style="color: #00aa00">Helyes válasz, 3 osztója!</div>

    <?php } ?>
<?php if (@$_GET['a105mod4']){
    if($_GET['a105mod4'] == "on") ?>
    <div style="color: #aa0000"> Helytelen válasz, 4 nem osztója!</div>
    <?php } ?>
<?php if (@$_GET['a105mod5']){
    if($_GET['a105mod5'] = "on") ?>
        <div style="color: #00aa00">Helyes valasz, 5 osztója!</div>
    <?php } ?>
<?php if (@$_GET['a105mod6']){
    if($_GET['a105mod6'] = "on") ?>
        <div style="color: #aa0000"> Helytelen válasz, 6 nem osztólya!</div>
    <?php } ?>
    <?php if (@$_GET['a105mod21']){
        if(strcmp($_GET['a105mod21'],"on") == 0) ?>
        <div style="color: #00aa00"> Helyes  válasz, 21 osztólya!</div>
    <?php } ?>
<div id = "adatKiiroszthatp"> </div>
<div id = "adatKiiroszthatz"> </div>
<div id = "adatKiirosszeg0"> </div>
<div id = "adatKiirosszeg1"><br /> </div>

<div>324+453+200=</div>

<?php if (@$_GET['ossz']){
    if(strcmp($_GET['ossz'],"977") == 0){ ?>
        <div style="color: #00aa00"> Helyes válasz, 977!</div>
    <?php }else{ ?>
    <div style="color: #aa0000"> Helytelen válasz: <?php echo $_GET['ossz']; ?> </div>
    <?php } }?>

<br />
<div> Egyenlő oldalú negyszog = </div>

<?php if (@$_GET['szoveg']){
    if($_GET['szoveg'] == "rombusz"){ ?>
        <div style="color: #00aa00"> Helyes válasz, rombusz!</div>
    <?php }else{ ?>
        <div style="color: #aa0000"> Helytelen válasz: <?php echo $_GET['szoveg']; ?> </div>
    <?php } }?>


<div id = "adatKiirnegyszog1"> </div>



<br />


<div><a href = urlap.php >Ürlapra visza</a></div>
<br />

<div><a href="index.php">Vissza</a></div>
</body></html>
