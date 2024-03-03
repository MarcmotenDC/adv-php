<?php

class Model
{
    public function getData(): array 
    {
        $dsn = "mysql:
        host=mywebtraining.net;
        dbname=sherd_SteveHarvey;
        charset=utf8;
        port=21";

$pdo = new PDO($dsn, "sherd_SteveHarvey", "secret", [
  PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
]);

$stmt = $pdo->query("SELECT * FROM `products`");

$products = $stmt->fetchAll(PDO::FETCH_ASSOC);

    }
}