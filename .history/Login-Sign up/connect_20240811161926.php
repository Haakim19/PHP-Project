<?php
$HOSTNAME = "localhost";
$USERNAME = "root";
$PASSWORD = "";
$db = "project01";

try {
    $conn = new PDO("mysql:host=$HOSTNAME;dbname = $db", $USERNAME, $PASSWORD);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected to $db at $HOSTNAME successfully.";
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}
