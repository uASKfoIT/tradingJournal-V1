<?php 
$servername = "localhost";
$username = "root";
$password = "";
$database_name = "trading_journal";

try {
    $pdo = new PDO("mysql:host=$servername;dbname=$database_name", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // error_log("Connection Successful"); // For safe logging
} catch(PDOException $e) {
    echo json_encode(['success' => false, 'error' => 'Database connection failed: ' . $e->getMessage()]);
    exit;
}
?>

