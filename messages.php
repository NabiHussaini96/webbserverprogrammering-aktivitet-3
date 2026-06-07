<?php

session_start();

if(!isset($_SESSION["loggedin"]))
{
    header("Location: index.php");
    exit();
}

$messages = "";

if(file_exists("messages.txt"))
{
    $messages = file_get_contents("messages.txt");
}

?>

<!DOCTYPE html>
<html lang="sv">

<head>
    <meta charset="UTF-8">
    <title>Sparade meddelanden</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<div class="container">

<h1>Sparade meddelanden</h1>

<div class="message-box">

<pre><?php echo htmlspecialchars($messages); ?></pre>

</div>

<a href="dashboard.php">
Till dashboard
</a>

<br><br>

<a href="logout.php">
Logga ut
</a>

</div>

</body>
</html>