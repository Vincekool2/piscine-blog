<?php 
require_once('../config/config.php');
require_once('../templates/page/indexView.php');


$stmt = $pdo->query('SELECT * FROM article');

$articles = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>