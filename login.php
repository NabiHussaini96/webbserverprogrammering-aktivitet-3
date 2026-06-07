<?php

session_start();

$username = $_POST["username"] ?? "";
$password = $_POST["password"] ?? "";

if($username === "admin" && $password === "1234")
{
    $_SESSION["loggedin"] = true;

    header("Location: dashboard.php");
    exit();
}

echo "
<!DOCTYPE html>
<html lang='sv'>
<head>
<meta charset='UTF-8'>
<link rel='stylesheet' href='style.css'>
<title>Fel</title>
</head>

<body>

<div class='container'>

<h1>Fel</h1>

<p>Fel användarnamn eller lösenord.</p>

<a href='index.php'>Försök igen</a>

</div>

</body>
</html>
";