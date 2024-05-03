<?php

$host = 'localhost';
$dbname = 'vibedb';
$dbusername = 'root';
$dbpassword = '';

try
{
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $dbusername, $dbpassword);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} 
catch (PDOException $e) 
{
    die("Connection to database failed: " . $e->getMessage());
}