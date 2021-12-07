<?php

$wartoscZZapytania = $_POST['wartosc'];

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

    $kwerenda = "INSERT INTO wartosci (wartosc) VALUE ('" . $wartoscZZapytania . "')";

    $rezultat = $connect->query($kwerenda);
    header("Location: ", $_SERVER['HTTP_REFERER']);
?>