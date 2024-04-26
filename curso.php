<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalhes do Curso</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #202124;
            color: #fff;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            background-color: #424242;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
            margin-top: 20px;
        }
        h1 {
            color: #fff;
            background-color: #333;
            padding: 10px;
            border-radius: 5px;
            margin-top: 0;
        }
        p {
            margin-top: 0;
        }
        .footer {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 10px 0;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
        .button {
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        .button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <?php
        include 'conexao.php';
        if (isset($_GET['id']) && !empty($_GET['id'])) {
            $id = $_GET['id'];
            $sql = "SELECT * FROM cursos_escoteiros WHERE id = $id";
            $result = $conn->query($sql);

            if ($result->num_rows == 1) {
                $row = $result->fetch_assoc();
                echo "<h1>" . $row['nome'] . "</h1>";
                echo "<p><strong>Instrutor:</strong> " . $row['instrutor'] . "</p>";
                echo "<p><strong>Data de Início:</strong> " . date('d/m/Y', strtotime($row['data_inicio'])) . "</p>";
                echo "<p><strong>Data de Término:</strong> " . date('d/m/Y', strtotime($row['data_fim'])) . "</p>";
                echo "<p><strong>Descrição:</strong><br>" . $row['descricao'] . "</p>";
            } else {
                echo "<p>Curso não encontrado.</p>";
            }
        } else {
            echo "<p>ID do curso não fornecido.</p>";
        }
        ?>
        <button class="button" onclick="window.location.href = 'cursos.php';">Voltar</button>
    </div>
    <div class="footer">
        <p>&copy; Todos os direitos reservados - By Lucas Diniz Sousa</p>
    </div>
</body>
</html>

<?php
$conn->close();
?>
