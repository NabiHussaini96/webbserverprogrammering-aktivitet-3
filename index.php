<!DOCTYPE html>
<html lang="sv">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logga in</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<div class="container">

    <h1>Inloggning</h1>

    <form action="login.php" method="post">

        <label for="username">Användarnamn</label>
        <input type="text" id="username" name="username">

        <label for="password">Lösenord</label>
        <input type="password" id="password" name="password">

        <button type="submit">
            Logga in
        </button>

    </form>

</div>

</body>
</html>