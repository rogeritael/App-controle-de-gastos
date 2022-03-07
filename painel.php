<html lang="php">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="assets/css/styles.css">
    <title>Painel</title>
</head>
<body>

    <div class="painel-container">
        <aside class="sidebar">
            <header class="sidebar-header">
                <h2>Projetos</h2>
                <i class="fas fa-plus"></i>
            </header>
            <div class="projetos">
                <ul>
                    <li>
                        <h3>UI/UX Design</h3>
                        <p>8 de 12 tarefas</p>
                    </li>
                    <li  class="atual">
                        <h3>site empresa de importação</h3>
                        <p>15 de 45 tarefas</p>
                    </li>
                    <li>
                        <h3>projeto da BRF</h3>
                        <p>17 de 24 tarefas</p>
                    </li>
                </ul>
            </div>
            <div class="logout-container">
                <p>sair</p>
                <i class="fas fa-sign-out-alt"></i>
            </div>
        </aside>

        <main class="conteudo-principal">
            <header>
                <div class="info-container">
                    <div class="info-projeto">
                        <h2>Site empresa de importação</h2>
                        <p>15 de 45</p>
                    </div>
                    <div class="btn-container">
                        <i class="fas fa-pen"></i>
                        <i class="fas fa-trash"></i>
                        <input type="button" value="adicionar tarefa">
                    </div>
                </div>
                <div class="info-txt">
                    <h3>Quadro</h3>
                </div>
            </header>
        </main>
    </div>
</body>
</html>