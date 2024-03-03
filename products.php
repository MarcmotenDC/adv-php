<?php

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

?>
<!-- HTML -->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Products</title>
</head>

<body>

  <h1>Products</h1>

  <?php foreach ($products as $product) : ?>
    <h2><?= htmlspecialchars($product["name"]) ?></h2>
    <p><?= htmlspecialchars($product["description"]) ?></p>
  <?php endforeach; ?>

</body>

</html>