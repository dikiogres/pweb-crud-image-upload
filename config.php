<?php

$host = "localhost";
$username = "root";
$password = "root";
$database = "image_upload_form";

$pdo = new PDO('mysql:host=' . $host . ';dbname=' . $database, $username, $password);

if (!$pdo) {
    die("Failed to connect with database.");
}