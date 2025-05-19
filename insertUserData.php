<?php
// Set header to JSON
header('Content-Type: application/json');

// Connection to DB
require 'database_connection.php'; 

// Get JSON data
$received_data = json_decode(file_get_contents("php://input"), true);

// Simple validation
$username = isset($received_data['username']) ? trim($received_data['username']) : null;
$password = isset($received_data['password']) ? trim($received_data['password']) : null;

//Username Exist?
$sql = "SELECT 1 FROM users WHERE LOWER(username) = LOWER(:username) LIMIT 1";
$stmt = $pdo->prepare($sql);
$stmt->execute(['username' => $username]);
$user = $stmt->fetch();

if($user){
    echo json_encode(['success' => false, 'error' => 'Username taken.']);
    exit;
}

// Proceed if valid
if ($username && $password) {
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    try {
        $stmt = $pdo->prepare("INSERT INTO users (username, password_hash) VALUES (:username, :password_hash)");
        $stmt->execute([
            ':username' => $username,
            ':password_hash' => $hashedPassword
        ]);

        echo json_encode(['success' => true, 'message' => 'User registered.']);
    } catch (PDOException $e) {
        echo json_encode(['success' => false, 'error' => $e->getMessage()]); // or log this instead
    }
} else {
    echo json_encode(['success' => false, 'error' => 'Missing username or password.']);
}
?>

