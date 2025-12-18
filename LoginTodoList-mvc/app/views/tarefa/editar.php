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
    <title>Editar tarefa</title>

    <style>
        * {
            box-sizing: border-box;
            font-family: 'Segoe UI', Arial, sans-serif;
        }

        body {
            margin: 0;
            min-height: 100vh;

            /* MESMO PLANO DE FUNDO */
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
            max-width: 500px;
            padding: 35px;

            /* MESMO CONTAINER TRANSLÚCIDO */
            background: rgba(0, 0, 0, 0.65);
            backdrop-filter: blur(6px);

            border-radius: 18px;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.7);
            color: #ffffff;
        }

        h1 {
            text-align: center;
            margin-bottom: 25px;
            color: #ffd700;
            letter-spacing: 1px;
        }

        form {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }

        input[type="text"] {
            padding: 14px;
            border-radius: 8px;
            border: none;
            font-size: 16px;
            outline: none;
        }

        button {
            padding: 14px;
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

        .back {
            margin-top: 22px;
            text-align: center;
        }

        .back a {
            color: #ffd700;
            font-weight: bold;
            text-decoration: none;
        }

        .back a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <h1>Editar tarefa</h1>

    <form action="index.php?action=atualizar" method="POST">
        <input type="hidden" name="id" value="<?php echo $tarefa['id']; ?>">
        <input type="text" name="descricao" value="<?php echo htmlspecialchars($tarefa['descricao']); ?>" required>
        <button type="submit">Salvar</button>
    </form>

    <a href="index.php">Voltar</a>
</body>
</html>