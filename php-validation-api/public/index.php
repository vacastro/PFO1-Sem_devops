<?php
require_once '../src/api/FormHandler.php';

header('Content-Type: application/json');

$formHandler = new FormHandler();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $data = json_decode(file_get_contents('php://input'), true);
    $response = $formHandler->handleForm($data);
    echo json_encode($response);
} else {
    echo json_encode(['error' => 'Invalid request method.']);
}
?>