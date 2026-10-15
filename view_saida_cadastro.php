

<!DOCTYPE html>
<html lang="pt-br">
    <!-- Esse é a página de exibição dos dados do cadastro-->
<head>
    <!-- Cabeçalho  -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Saída</title>
    <link rel="icon" href="assets/icone.png" type="image/x-icon">

</head>

<body style="background-color: black; color: #9966ff;">
    <header>
        <!-- Cabeçalho com abas de outras páginas -->
        <nav style="text-align: rigth;">
            <span><a href="index.php" style="text-decoration: none; color: #f235e3">Início | </a></span>
            <span><a href="view_cadastro.php" style="text-decoration: none; color: white">Cadastar |</a></span>
            <span><a href="view_franquias.php" style="text-decoration: none; color: #f235e3">Franquias |</a></span>
            <span><a href="view_sobre.php" style="text-decoration: none; color: #f235e3">Sobre nós |</a></span>
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
        <h2 style="text-align: center;">Dados Finais de cadastro</h2>
        <section>
            <p><b>Nome: </b><?= $aluno['nome']?></p>
            <p><b>Idade: </b><?= $aluno['idade']?></p>
            <p><b>CPF: </b><?= $aluno['cpf']?></p>
            <p><b>Peso: </b><?= number_format($aluno['peso'], 1, ",", ".")?>Kg</p>
            <p><b>Altura: </b><?= $aluno['altura']?>m</p>
            <p><b>Gênero: </b><?= $aluno['genero']?></p>
            <p><b>IMC: </b><?= number_format($imc, 2, ",", ".")?>kg/m²</p>
            <p><b>Classificação IMC: </b><?= $classificacao?></p>
            <p><b>Treino: </b><?= $nomeTreino?></p>
            <p><b>Plano: </b><?= $nomePlano?></p>
            <p><b>Valor: </b>R$<?= number_format($valorPlano, 2, ",", ".")?></p>
            <br>
            <button><a href="view_tabelafinal.php">Imprimir tabela</a></button>
        </section>
    </main>
</body>
</html>