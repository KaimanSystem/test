<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Escolha de Cadastro | Kaiman System</title>
    <link href="https://fonts.cdnfonts.com/css/bebas-neue" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        @import url('https://fonts.cdnfonts.com/css/bebas-neue');

        body {
            font-family: 'Bebas Neue', sans-serif;
            background-image: linear-gradient(to top, #92e06e, #3a6925);
            text-align: center;
            color: #ffffff;
            margin: 0;
            height: 100vh; 
            display: flex;
            flex-direction: column;
            justify-content: center;
        } 
        .box {
            position: relative;
            background-color: rgba(0, 0, 0, 0.7);
            padding: 30px;
            border-radius: 20px;
            display: inline-block;
            margin-bottom: 20px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            width: 80%;
            max-width: 500px;

            margin: 0 auto;  /* Center horizontally */
        }
        a {
            text-decoration: none;
            color: white;
            border: 3px solid #568915;
            border-radius: 15px;
            padding: 10px;
            margin: 0 10px;
            display: block;
            margin-bottom: 10px;
        }
        a:hover {
            background-color: #568915;
        }
        
        .back-btn {
            background-color: rgba(0, 0, 0, 0.7);
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            text-decoration: none;
            font-size: 16px;
            cursor: pointer;
            position: absolute;
            top: 20px;
            left: 20px;
            margin-top: 10px;
        }

        .back-btn:hover {
            background-color: #568915;
        }

        .back-btn i {
            margin-right: 5px;
        }
    </style>
</head>
<body>
    <a href="home.php" class="back-btn"><i class="fas fa-arrow-left"></i>Voltar</a>
    <div class="box">
        <h1>Escolha o Tipo de Cadastro</h1>
        <br>
        <a href="formulario_aluno.php">Alunos</a>
        <a href="formulario_comunidade.php">Comunidade</a>
    </div>
</body>
</html>
