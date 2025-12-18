<?php
if(!isset($_SESSION)){
    session_start();
}
if(!isset($_SESSION['id'])){
    $_SESSION['erro'] = 'Você não está autenticado! \nFaça login para acessar o conteúdo';
    header('Location: /index.php');
}
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
<meta charset="UTF-8">
    <title>To-Do List</title>

    <style>
        * {
            box-sizing: border-box;
            font-family: 'Segoe UI', Arial, sans-serif;
        }

        body {
            margin: 0;
            min-height: 100vh;

            /* PLANO DE FUNDO */
            background-image: url('https://img.freepik.com/vetores-premium/fundo-de-ano-novo-e-feliz-natal_118124-4235.jpg');
            background-size: cover;
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;

            display: flex;
            justify-content: center;
            align-items: center;
        }

        .container {
            width: 100%;
            max-width: 600px;
            padding: 35px;

            /* CONTAINER TRANSLÚCIDO */
            background: brown;
            backdrop-filter: blur(6px);

            border-radius: 18px;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.7);
            color: #ffffff;
        }

        h1 {
            text-align: center;
            margin-bottom: 25px;
            color: #ff6b6b
            letter-spacing: 1px;
        }

        form {
            display: flex;
            gap: 10px;
            margin-bottom: 25px;
        }

        input[type="text"] {
            flex: 1;
            padding: 12px;
            border-radius: 8px;
            border: none;
            font-size: 16px;
            outline: none;
        }

        button {
            padding: 12px 18px;
            border-radius: 8px;
            border: none;

            background: linear-gradient(135deg, #198754, #0d6efd);
            color: #ffffff;

            font-size: 16px;
            font-weight: bold;
            cursor: pointer;

            transition: transform 0.2s, box-shadow 0.2s;
        }

        button:hover {
            transform: scale(1.05);
            box-shadow: 0 8px 18px rgba(13, 110, 253, 0.6);
        }

        h2 {
            margin-bottom: 15px;
            color: #ffffff;
        }

        ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        li {
            background: rgba(255, 255, 255, 0.15);
            padding: 12px 14px;
            border-radius: 8px;
            margin-bottom: 10px;

            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 10px;
        }

        .actions a {
            margin-left: 10px;
            color: #ffd700;
            text-decoration: none;
            font-weight: bold;
        }

        .actions a:hover {
            text-decoration: underline;
        }

        p {
            text-align: center;
            opacity: 0.9;
        }

        .logout {
            display: block;
            margin-top: 25px;
            text-align: center;
            color: #ff6b6b;
            font-weight: bold;
            text-decoration: none;
        }

        .logout:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>

    <h1>TO-DO List (MVC)</h1>

    <form action="index.php?action=criar" method="POST">
        <input type="text" name="descricao" placeholder="Descrição da tarefa">
        <button type="submit">Adicionar</button>
    </form>


    <?php if (!empty($tarefas)): ?>
        <h2>Suas tarefas</h2>
        <ul>
            <?php foreach ($tarefas as $tarefa): ?>
                <li>
                    <?php echo htmlspecialchars($tarefa['descricao']); ?>
                    <a href="index.php?action=excluir&delete=<?php echo $tarefa['id']; ?>">Excluir</a>
                    <a href="index.php?action=editar&id=<?php echo $tarefa['id']; ?>">Editar</a>
                </li>
            <?php endforeach; ?>
        </ul>
    <?php else: ?>
        <p>Não há tarefas ainda!</p>
    <?php endif; ?>
    <a href="index.php?action=logout">Sair</a>
</body>

</html>

