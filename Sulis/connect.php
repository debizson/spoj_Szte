<?php
const DATABASE_URL = "localhost";
const DATABASE_USER = "root";
const DATABASE_PW = "";
const DATABASE_NAME = "blog1";

$connection = @mysqli_connect(DATABASE_URL, DATABASE_USER, DATABASE_PW, DATABASE_NAME);


// Ha nem létezik az adatbázis, akkor 1049 hibakódot kapunk
if (mysqli_connect_errno() == 1049) {

  // Új kapcsolat nyitása alapértelmezett adatbázis nélkül
  $connection = @mysqli_connect(DATABASE_URL, DATABASE_USER, DATABASE_PW);

  // Adatbázis létrehozása
  if (!mysqli_query($connection, "CREATE DATABASE IF NOT EXISTS ".DATABASE_NAME)) {
    echo "Adatbázis létrehozása sikertelen!";
    exit;
  }

  // Újonnan létrehozott adatbázis kiválasztása
  mysqli_select_db($connection, DATABASE_NAME);

  // Táblák létrehozása
  if (!mysqli_query($connection, <<<EOD
CREATE TABLE `post` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `text` text NOT NULL,
  `posted` date NOT NULL,
  `imagepath` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
)
EOD
)) {
    echo "A post tábla létrehozása sikertelen!";
    exit;
  }

}

if (mysqli_connect_errno()) {
  echo "Hiba az adatbázishoz kapcsolódás során." . PHP_EOL;
  echo "Hibakód: " . mysqli_connect_errno() . PHP_EOL;
  echo "Hiba üzenet: " . mysqli_connect_error() . PHP_EOL;
  exit;
}


