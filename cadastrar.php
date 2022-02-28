<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="assets/css/styles.css">
    <title>Cadastrar</title>
</head>
<body>

    <section id="container-login">
        <a href="index.php"><i id="logo" class="fas fa-piggy-bank"></i></a>
        <h1>Crie a sua conta para começar</h1>

        <form id="form-login-cadastro" class="cadastro" action="">
            <label class="label"> Nome</label>
            <input class="input" type="text" name="nome" placeholder="digite seu nome">

            <label class="label">Sobrenome</label>
            <input class="input" type="text" name="sobrenome" placeholder="digite seu sobrenome">

            <label class="label">Email</label>
            <input class="input" type="email" name="email" placeholder="digite seu email">


            <label class="label">Senha</label>
            <input class="input" type="password" name="senha" placeholder="digite sua senha">

            <input class="input btn-cadastro" type="button" value="Cadastrar">
        </form>
        <p class="cadastro-txt"><a href="index.php">Voltar</a></p>
    </section>
    
</body>
</html>