<?php
session_start();


if (!isset($_SESSION['reg']))
        $_SESSION['reg'] = "none;";
if (!isset($_SESSION['statusz']))
    $_SESSION['statusz'] = "Vendéglátogató";
if (!isset($_SESSION['uzcsi']))
    $_SESSION['uzcsi'] = " ";
if (!isset($_SESSION['kom']))
    $_SESSION['kom'] = "index2.php";
$errorMessage = " ";
    include('log.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Blog</title>
    <link rel="stylesheet" href="xmy.css" type="text/css">
</head>

<body>


<div id="linkes"><div id="uszili"><ul>
            <li class="aktualis"><a href="index.php" >SW tartalmak</a></li>
            <li><a href="Star_Wars2.php" >SW helyszínek</a></li>
            <li><a href="Star_Wars3.php">SW szereplők</a></li>
        </ul></div>
    
    
    
    <?php include('form.php'); ?>
    
    
<h1 >Tartalmak</h1>
<h2>STAR WARS</h2>

<div>George Lucas, mikor megírta a film forgatókönyvét, nem is gondolta volna, hogy a filme ilyen nagy népszerűségnek fog örvendeni. A kezdetekkor minden rosszul alakult. A filmvállalatok meg sem akarták venni a filmjét, de végül a 20th Century Fox-szal sikerült megegyeznie. Elõször õk sem fűztek a filmhez sok reményt, azonban ez másképp alakult.<br />
<span id="uszos"><img src="birodalom.gif"
                      alt="egy jelvény" title="birodalmi jelvény" /></span>
    1977-ben bemutatták az elsõ részt (A New Hope), amit követett a Birodalom visszavág (The Empire Strikes Back) és A Jedi visszatér (Return of the Jedi).Lucas egy kilenc részes űreposzt álmodott meg, és ez a trilógia a középsõ három rész volt.<br />
    Hamarosan elkezdik vetíteni az elõzményeket, az elsõ három rész. Ezekbõl választ kapunk arra, hogy miért vált Darth Vader sötét jedivé, ki is valójában Ken obi mester, és még sok minden másra.<br /><br />
    A filmek hatására sok dolgot adtak ki a Csillagok Háborújához. Könyvek  matricák, szerepjáték, modellek, számítógépes játékok stb. A történet folytatdodott, méghozzá a Csillagok Háborúja könyvekben.
    A filmgyártás történetében nem volt még egy olyan átütő erejű kasszasiker, mint a Star Wars. Ahogy mondani szokták, van a Star Wars és vannak az egyéb filmek. Manapság már az egy-két évvel ezelőtt készített filmek sem érdekelnek senkit, és valószínűleg a nagyra magasztalt Titanic is elsüllyed örökre az Episode I. bemutatója után. Ez az összeállítás címszavakban villantja fel néhány - hangsúlyozzuk néhány (!) - fontosabb esemény időpontját!</div>
</body></html>



