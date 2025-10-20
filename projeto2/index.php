<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página inicial</title>
</head>
<body>
    <h2>Login simples</h2>
    <form method = "POST" action = "login.php">
        Usuário: <input type = "text" name = "usuario">
        Senha: <input type = "password" name = "senha">
        
    <select name = "tema">
    <option value = "claro">Claro</option>
    <option value = "escuro">Escuro</option>
    </select><br>
    <input type = "submit" value = "Enviar">
    </form>

</body>
</html>