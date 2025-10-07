<?php

header('Content-Type: application/json');

$response = file_get_contents('https://ipinfo.io/json');

if ($response === false) {
    http_response_code(500);
    echo json_encode(['error' => 'Failed to fetch IP info']);
    exit;
}

echo $response;

?>
