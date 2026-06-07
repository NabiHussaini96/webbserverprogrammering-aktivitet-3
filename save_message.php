<?php

session_start();

if(!isset($_SESSION["loggedin"]))
{
    header("Location: index.php");
    exit();
}

$message = trim($_POST["message"]);

if(empty($message))
{
    die("Meddelandet får inte vara tomt.");
}

file_put_contents(
    "messages.txt",
    $message . PHP_EOL,
    FILE_APPEND
);

header("Location: messages.php");
exit();