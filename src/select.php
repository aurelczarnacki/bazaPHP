<?php

$hostname = '127.0.0.1';
$username = 'root';
$password = '';
$databasename = 'phpdb';

$connect =
    new mysqli(
        $hostname,
        $username,
        $password,
        $databasename
    );

$kwerendaOdczyt = "SELECT * from wartosci";
$rezultat = $connect->query($kwerendaOdczyt);
if ($rezultat) {
    while ($wiersz = $rezultat->fetch_assoc())
        printf("$% \n", $wiersz['wartosc']);
    
    $rezultat->free();
}

?>