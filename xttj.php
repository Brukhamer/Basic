<?php
const DB_PROVIDER = 'pgsql';
const DB_NAME = 'lesson';
const DB_HOST = 'localhost';
const DB_USERNAME = 'postgres';
const DB_PASSWORD = '';

$pdo = new PDO(
    DB_PROVIDER.":host=" . DB_HOST .";dbname=" . DB_NAME,
    DB_USERNAME,
    DB_PASSWORD
);

$que = $pdo->prepare ( 'SELECT * FROM type');
$que->execute ();
$que ->setFetchMode(  PDO::FETCH_ASSOC);
$data = $que->fetchAll () ;
var_dump ($data);

