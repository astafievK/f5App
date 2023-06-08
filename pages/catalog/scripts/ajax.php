<?php
$dbh = new PDO('mysql:host=localhost;dbname=f5App', 'root', 'root');

$sql = "SELECT * FROM products";

try{
    $result = $dbh->query($sql)->fetchAll(PDO::FETCH_ASSOC);
    header('Content-Type: application/json; charset=utf-8');
    echo json_encode($result);
}
catch (PDOException $e){
    echo '<pre>'; print_r($sql); echo '</pre>';
    $this->error($e->getMessage());
}