<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
    <!-- Esse é a página sobre nós/objetivos e propostas -->
<head>
    <!-- Cabeçalho  -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sobre nós</title>
    <link rel="icon" href="assets/icone.png" type="image/x-icon">

</head>

<body style="background-color: black; color: #9966ff;">
    <header>
        <!-- Cabeçalho com abas de outras páginas -->
        <nav style="text-align: rigth;">
            <span><a href="index.php" style="text-decoration: none; color: #f235e3">Início | </a></span>
            <span><a href="view_cadastro.php" style="text-decoration: none; color: #f235e3">Cadastar |</a></span>
            <span><a href="view_franquias.php" style="text-decoration: none; color: #f235e3">Franquias |</a></span>
            <span><a href="view_sobre.php" style="text-decoration: none; color:  #f235e3">Sobre nós |</a></span>
            <span><a href="view_referencias.php" style="text-decoration: none; color: #f235e3">Refêrencias |</a></span>
            <span><a href="view_marca.php" style="text-decoration: none; color: #f235e3">Nossa Marca |</a></span>
            <span><a href="view_galeria.php" style="text-decoration: none; color: #f235e3">Galeria |</a></span>
            <span><a href="view_aulasModalidades.php" style="text-decoration: none; color: #f235e3">Aulas e Modalidades |</a></span>
            <span><a href="view_treinos.php" style="text-decoration: none; color: #f235e3">Treinos |</a></span>
            <span><a href="view_relatorio.php" style="text-decoration: none; color: #f235e3">Relatório</a></span>
        </nav>
        <nav style="text-align: right;">        
        <span><a href="view_usuario.php" style="text-decoration: none; color: #f235e3"><img src="assets/iconUsuario.png" style="text-align: left;" width="40" alt=""></a></span>
        </nav>
    </header>
    <main>
        <h3 style="text-align: center;">Dados</h3>
        <table border="1" style="width: 90%; margin: auto; height: 60px">
            <thead style>
                <tr>
                    <th>Nome</th>
                    <th>Idade</th>
                    <th>CPF</th>
                    <th>Peso</th>
                    <th>ALtura</th>
                    <th>IMC</th>
                    <th>Classificação IMC</th>
                    <th>Gênero</th>
                    <th>Treino</th>
                    <th>Plano</th>
                    <th>Valor</th>
                </tr>
            </thead>
            <tbody style="text-align: center;">
                <tr>
                    <td><?= $_SESSION['nome']?></td>
                    <td><?= $_SESSION['idade']?></td>
                    <td><?= $_SESSION['cpf']?></td>
                    <td><?= $_SESSION['peso']?></td>
                    <td><?= $_SESSION['altura']?></td>
                    <td><?= number_format($_SESSION['imc'], 2, ",", ".")?>kg/m</td>
                    <td><?= $_SESSION['classificacao']?></td>
                    <td><?= $_SESSION['genero']?></td>
                    <td><?= $_SESSION['nometreino']?></td>
                    <td><?= $_SESSION['nomeplano']?></td>
                    <td><?= number_format($_SESSION['valorplano'], 2,",", ".")?></td>
                </tr>
            </tbody>
        </table>
</body>

