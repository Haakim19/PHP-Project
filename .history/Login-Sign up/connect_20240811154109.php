<?php
$HOSTNAME = "localhost";
$USERNAME = "root";
$PASSWORD = "";
$DATABASE = "project01";

try {
    $conn = new PDO("mysql:host=$HOSTNAME;dbname = $DATABASE", $USERNAME, $PASSWORD);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected to $DATABASE at $HOSTNAME successfully.";
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}
