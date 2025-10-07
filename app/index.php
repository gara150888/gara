<?php

$token = "8195833399:AAH33gWyDLY2k0H-JRVo1ZZw4FRwelI0Ocw";
$update = json_decode(file_get_contents("php://input"), true);

$chatId = $update["message"]["chat"]["id"];
$text = $update["message"]["text"];

if ($text == "/start") {
    $message = "Hello! Bot is working!";
    file_get_contents("https://api.telegram.org/bot$token/sendMessage?chat_id=$chatId&text=" . urlencode($message));
}

?>
