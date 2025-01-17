<?php
session_start();
include_once('config.php');

// Verificar se a sessão está definida para 'matricula'
if (!isset($_SESSION['matricula'])) {
    header('Location: home.php');
    exit;
}

$matricula = $_SESSION['matricula'];
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kaiman System | Meu Perfil</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <style>
        body {
            background-image: linear-gradient(to top, #92e06e, #3a6925);
            color: white;
            text-align: center;
            font-family: Arial, sans-serif;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            padding-top: 60px;  /* Espaço para a barra de navegação */
        }

        .navbar {
            position: fixed;
            top: 0;
            width: 100%;
            background-color: #829d5e;
            display: flex;
            justify-content: space-between;
            padding: 0 10px; /* Reduzido para 10px */
            z-index: 1000;
            height: 50px; /* Altura reduzida para 50px */
            align-items: center; /* Alinha o conteúdo verticalmente no centro */
        }

        .navbar-brand {
            font-family: 'Bebas Neue', cursive;
            font-size: 16px; /* Fonte reduzida para 16px */
            color: white;
        }

        .btn-danger {
            font-family: 'Bebas Neue', cursive;
            font-size: 14px; /* Fonte reduzida para 14px */
        }

        .profile-options {
            background: rgba(0, 0, 0, 0.7);
            border-radius: 10px;
            padding: 20px;
            margin: 20px;
            max-width: 600px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.3);
        }

        .profile-options h2 {
            color: #829d5e;
            font-family: 'Bebas Neue', cursive;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
            margin-bottom: 20px;
            font-size: 36px;
        }

        .profile-options a {
            color: #fff;
            text-decoration: none;
            font-size: 18px;
            display: block;
            margin: 10px 0;
            padding: 10px;
            border-radius: 5px;
            background: rgba(0, 0, 0, 0.3);
            transition: background 0.3s;
        }

        .profile-options a:hover {
            background: rgba(255, 255, 255, 0.4);
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg">
        <a class="navbar-brand" href="perfil_alunos.php">
            <img src="IMG/perfil.png" alt="Perfil">
            Meu Perfil
        </a>
        <div class="d-flex">
            <a href="sair.php" class="btn btn-danger me-3">Sair</a>
        </div>
    </nav> 

    <div class="profile-options">
        <h2>Opções de Perfil</h2>
        <a href="alunos_alterar_dados.php">Alterar Dados</a>
        <a href="alunos_verificar_dados.php">Verificar Dados</a>
    </div>

</body>
</html>
