<?php

$dsn = "mysql:host=db;dbname=product_db;port=3306;charset=utf8mb4;";

$pdo = new PDO($dsn, "product_db_user", "secret");

$stmt = $pdo->query("SELECT * FROM product");

$products = $stmt->fetchAll(PDO::FETCH_ASSOC);

print_r($products);