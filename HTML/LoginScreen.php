<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/Style.css">
    <title>Login Screen</title>
</head>
<body>
    <form action="" id = "loginForm">
        <h1 id = "TitleLogin">Login</h1>
        <input class = "LoginInput" type="email" name = "EmailLogin" id = "EmailLogin" placeholder = "Email">
        <br>
        <input class = "LoginInput" type="password" name = "PasswordLogin" id = "PasswordLogin" placeholder = "Senha">
        <br>
        <input type="checkbox" name = "ViewPassword" id = "ViewPassword"><label class = "LabelCheckbox" for="ViewPassword">Visualizar Senha</label>
        <br>
        <button class = "btnSubmit" type="submit">Login</button>
    </form>
</body>
</html>