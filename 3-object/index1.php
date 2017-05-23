<?php
require __DIR__ . '/ShopProduct.php';
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>Исполнитель: <?=$product2->getSummaryLine(); ?></h1>
<p>Цена: <?=$product2->price; ?></p>
<p>Цена со скидкой: <?=$product2->getPrice(); ?></p>
</body>
</html>