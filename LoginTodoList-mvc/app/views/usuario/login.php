<?php
if (isset($_SESSION['erro'])) {
    echo "<script>alert('" . $_SESSION['erro'] . "')</script>";
    unset($_SESSION['erro']);
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
            height: 100vh;

            /* FUNDO NATALINO */
            background-image: url('https://img.freepik.com/vetores-premium/fundo-de-ano-novo-e-feliz-natal_118124-4235.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;

            display: flex;
            justify-content: center;
            align-items: center;
        }

        .card {
            width: 100%;
            max-width: 420px;
            padding: 35px;

            /* CAIXA TRANSLÚCIDA VERMELHA */
            background: rgba(139, 0, 0, 0.75);
            backdrop-filter: blur(6px);

            border-radius: 16px;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.6);
            border: 3px solid rgba(255, 215, 0, 0.8); /* dourado */

            color: #ffffff;
        }

        h1 {
            text-align: center;
            margin-bottom: 25px;
            color: #ffd700;
            letter-spacing: 1px;
        }

        input[type="text"] {
            width: 100%;
            padding: 14px;
            border-radius: 8px;
            border: none;
            font-size: 16px;
            margin-bottom: 25px;
            outline: none;
        }

        input[type="text"]:focus {
            box-shadow: 0 0 10px rgba(255, 215, 0, 0.9);
        }

        button {
            width: 100%;
            padding: 14px;
            border-radius: 8px;
            border: none;

            background: linear-gradient(135deg, #ff0000, #b30000);
            color: #ffffff;

            font-size: 17px;
            font-weight: bold;
            cursor: pointer;

            transition: transform 0.2s, box-shadow 0.2s;
        }

        button:hover {
            transform: scale(1.04);
            box-shadow: 0 10px 25px rgba(255, 0, 0, 0.6);
        }

        a {
            display: block;
            margin-top: 22px;
            text-align: center;
            color: #ffd700;
            font-weight: bold;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }

        .footer {
            text-align: center;
            margin-top: 18px;
            font-size: 14px;
            color: #ffffff;
            opacity: 0.9;
        }
    </style>
</head>

<body>

    <h1>Acesse sua conta</h1>

    <form action="index.php?action=login" method="POST">
        <p>
            <label>E-mail</label>
            <input type="text" name="email">
        </p>
        <p>
            <label>Senha</label>
            <input type="password" name="senha">
        </p>
        <p>
            <button type="submit">Entrar</button>
        </p>
    </form>

</body>

</html>