<?php
const DATABASE_URL = "localhost";
const DATABASE_USER = "root";
const DATABASE_PW = "";


/*$connection1 = @mysqli_connect(DATABASE_URL, DATABASE_USER, DATABASE_PW, DATABASE_NAME);*/

if (mysqli_connect_errno()) {
    echo "Hiba az adatbázishoz kapcsolódás során." . PHP_EOL;
    echo "Hibakód: " . mysqli_connect_errno() . PHP_EOL;
    echo "Hiba üzenet: " . mysqli_connect_error() . PHP_EOL;
    exit;
}


