<?php

$user = 'root';
$pass = '';

try {
    $db = new PDO('mysql:host=localhost;dbname=bambu', $user, $pass);
} catch (Exception $e) {
    die("Erreur !: " . $e->getMessage());
}
