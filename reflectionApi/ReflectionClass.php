<?php
require_once __DIR__ . '/../3-object/ShopProduct.php';

$prod_class = new ReflectionClass('ShopProduct');
echo '<pre>';
Reflection::export($prod_class);

