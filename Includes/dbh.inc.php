<?php

$host = 'sql205.infinityfree.com';
$dbname = 'if0_36187460_vibe';
$dbusername = 'if0_36187460';
$dbpassword = 'JtsqOUVCggV';

try
{
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $dbusername, $dbpassword);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} 
catch (PDOException $e) 
{
    die("Connection to database failed: " . $e->getMessage());
}