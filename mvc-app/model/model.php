<?php

function connect_db() {
    $host = 'localhost';
    $db = 'travel_app';
    $user = 'root';
    $password = '';
    
    $pdo = new PDO("mysql:host=$host;dbname=$db", $user, $password);
    return $pdo;
}

function get_all_cities() {
    $pdo = connect_db();
    $stmt = $pdo->query('SELECT * FROM cities');
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function get_city($id) {
    $pdo = connect_db();
    $stmt = $pdo->prepare('SELECT * FROM cities WHERE id = ?');
    $stmt->execute([$id]);
    return $stmt->fetch(PDO::FETCH_ASSOC);
}
?>
