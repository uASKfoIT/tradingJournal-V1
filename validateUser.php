<?php
// Set header to JSON
header('Content-Type: application/json');

//Connect to the database
require 'database_connection.php'; 

//Get JSON data
$received_data = json_decode(file_get_contents("php://input"), true);

//Simple Validation
$username = isset($received_data['username']) ? trim($received_data['username']) : null;
$password = isset($received_data['password']) ? trim($received_data['password']) : null;

//Get Data Based on username
$sql_stmt = "SELECT * FROM users WHERE LOWER(username) = LOWER(:username)";
$stmt = $pdo->prepare($sql_stmt);
$stmt->execute(['username' => $username]);
$user = $stmt->fetch(PDO::FETCH_ASSOC);

//No user exist
if(!$user){
    echo json_encode(['success' => false, 'message' => 'User DNE']);
    exit;
}

//Validating Information 
$temp_password = $user['password_hash'];

if (password_verify($password, $temp_password)){
    echo json_encode(['success' => true, 'message' => 'correct password']);
}else{
    echo json_encode(['success' => false, 'message' => 'Incorrect Password']);
}
?>