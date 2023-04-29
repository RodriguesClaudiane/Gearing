<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criando usuario</title>
    <link rel="stylesheet" href="/css/criandoNovoUser.css">
</head>
<body>
    <section class="sessao_principal"> 
        <div class="formulario_sessao_principal">
            <form id="formulario" method="POST" action="/php/userCRUD/adicionarUser.php">
                <label class="test">usuario:
                    <input type="text" id="user" name="user" placeholder="Digite aqui seu nome de usuario" required>
                </label><br>
                <label>nome:
                    <input type="text" name="nome" placeholder="Digite aqui seu nome" required>
                </label><br>
                <label>sobrenome:
                    <input type="text" name="sobrenome" placeholder="Digite aqui seu sobrenome" required>
                </label><br>
                <label>email:
                    <input type="email" id="email" name="email" placeholder="Digite aqui seu email" required>
                </label><br>
                <label>senha:
                    <input type="password" id="senha" name="senha" placeholder="Digite aqui sua senha" required>
                </label><br>
                <label>Confirme sua senha:
                    <input type="password" id="confirme" name="confirmaSenha" placeholder="Digite novamente sua senha" required>
                </label><br>
                <button type="submit">Entrar</button>
                <button id="voltar" onclick="window.location.href = '/' ">Voltar</button>
                <!-- Pergunta: Qual método você costuma usar para estudar? -->
        </div>
        </form>
    </section>
    <script defer src='/script/userCRUD/criandoNovoUser.js'></script>
</body>
</html>