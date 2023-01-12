<?php
// DB接続情報
$dsn = 'sqlite:../db/url.db';
$ad1 = $_POST["ad1"];
// $ad1 = 12;
$ad2 = '';

$pdo = new PDO($dsn);

$stmt = $pdo->prepare("INSERT INTO url_table (id,ad1,ad2) VALUES(NULL,:ad1,:ad2)");
$stmt->bindValue(':ad1', $ad1, PDO::PARAM_STR);
$stmt->bindValue(':ad2', $ad2, PDO::PARAM_STR);
$status = $stmt->execute();
header('Location: url_kanri.php');
?>
