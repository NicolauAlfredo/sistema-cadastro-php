<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/login.css">
    <title>Login</title>
</head>

<body>
    <a href="home.php">Voltar</a>
    <div>        
        <h1>Login</h1>
        <form action="testLogin.php" method="post">
            <input type="text" name="email" id="email" placeholder="Email">
            <br><br>
            
            <input type="password" name="senha" id="senha" placeholder="Senha">
            <br><br>
            <input class="input-submit" type="submit" name="submit" value="Enviar">
        </form>
    </div>
</body>

</html>