<?php
// DB接続情報
$dsn = 'sqlite:../db/news.db';
$ad1 = $_POST["ad1"];
// $ad1 = 12;
$ad2 = '';
$ad3 = '';

$pdo = new PDO($dsn);

$stmt = $pdo->prepare("INSERT INTO news_table (id,ad1,ad2,ad3) VALUES(NULL,:ad1,:ad2,:ad3)");
$stmt->bindValue(':ad1', $ad1, PDO::PARAM_STR);
$stmt->bindValue(':ad2', $ad2, PDO::PARAM_STR);
$stmt->bindValue(':ad3', $ad3, PDO::PARAM_STR);
$status = $stmt->execute();
header('Location: news_kanri.php');
?>
