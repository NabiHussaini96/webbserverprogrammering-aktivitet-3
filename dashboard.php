<?php

session_start();

if(!isset($_SESSION["loggedin"]))
{
    header("Location: index.php");
    exit();
}

?>

<!DOCTYPE html>
<html lang="sv">

<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<div class="container">

<h1>Dashboard</h1>

<p>Du är inloggad.</p>

<form action="save_message.php" method="post">

<label for="message">
Meddelande
</label>

<textarea
id="message"
name="message"
rows="5"></textarea>

<button type="submit">
Spara meddelande
</button>

</form>

<br>

<a href="messages.php">
Visa alla meddelanden
</a>

<br><br>

<a href="logout.php">
Logga ut
</a>

</div>

</body>
</html>