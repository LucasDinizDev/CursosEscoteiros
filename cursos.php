<?php
include 'conexao.php';

$sql = "SELECT * FROM cursos_escoteiros";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cursos Escoteiros</title>
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
            margin: 20px auto;
            padding: 20px;
            background-color: #424242;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
        }
        h1 {
            color: #fff;
            background-color: #333;
            padding: 10px;
            border-radius: 5px;
            margin-top: 0;
        }
        .cursos-lista {
            list-style-type: none;
            padding: 0;
        }
        .cursos-lista li {
            margin-bottom: 10px;
        }
        .cursos-lista li a {
            display: block;
            color: #007bff;
            text-decoration: none;
            padding: 10px;
            border: 1px solid #007bff;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }
        .cursos-lista li a:hover {
            background-color: #007bff;
            color: #fff;
        }
        .footer {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 10px 0;
            width: 100%;
            position: fixed;
            bottom: 0;
            left: 0;
        }
        .footer p {
            margin: 0;
        }
        .logo-container {
            text-align: center;
            margin-bottom: 20px;
        }
        .logo-container img {
            max-width: 15%;
            height: auto;
        }
    </style>
</head>
<body>
    <div class="logo-container">
        <img src="img/logo.png" alt="Logo dos Escoteiros do Brasil">
    </div>
    <div class="container">
        <h1>Cursos Escoteiros</h1>
        <ul class="cursos-lista">
            <?php
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo "<li><a href='curso.php?id=" . $row["id"] . "'>" . $row["nome"] . "</a></li>";
                }
            } else {
                echo "<li>Nenhum curso encontrado.</li>";
            }
            ?>
        </ul>
    </div>
    <div class="footer">
        <p>&copy; Todos os direitos reservados - By Lucas Diniz Sousa</p>
    </div>
</body>
</html>

<?php
$conn->close();
?>
