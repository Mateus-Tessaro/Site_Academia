<!DOCTYPE html>
<html lang="pt-br">
    <!-- Esse é a página de Cadastro -->
<head>
    <!-- Cabeçalho  -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
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
        <h1>Cadastro</h1>
        <nav> <img src="assets/img01.png" width="400"> </nav>
        <form style="color: white" action="logicaController.php" method="POST">
            <label for="nome">Nome </label><br>
            <input type="text" id="nome" name="nome" placeholder="Digite o nome..." required>
            <br><br>
            <label for="idade">Idade </label><br>
            <input type="number" id="idade" name="idade" placeholder="Digite a idade..." required>
            <br><br>
            <label for="cpf">CPF </label><br>
            <input type="text" id="cpf" name="cpf" placeholder="Digite o CPF..." required>
            <br>
            <br>
            <label for="peso">Peso</label><br>
            <input type="number" id="peso" name="peso" step="0.1" placeholder="Digite o peso..." required>
            <br><br>
            <label for="altura">Altura</label><br>
            <input type="number" id="altura" name="altura" step="0.1" placeholder="Digite a altura..." required>
            <br><br>
            <!-- radio -->
            <label for="">Gênero</label>
            <br>
            <label for="Maculino">Maculino</label>
            <input type="radio" value="Masculino" id="Masculino" name="pergunta">
            <br>
            <label for="Feminino">Feminino</label>
            <input type="radio" value="Feminino" id="Feminino" name="pergunta">
            <br><br>
            <!-- selection -->
            <label for="treinos">Selecione a divisão de treino que Deseja:</label><br>
                <select name="treinos" id="treinos">
                    <option value=""selected disabled >Selecione...</option>
                    <option value="ppl">PPL (Push, Pull, Legs)</option>
                    <option value="fullbody">Full Body (Corpo todo)</option>
                    <option value="abcd">ABCD (um grupo muscular por dia)</option>
                    <option value="upperlower">Upper/Lower (Superior e Inferior)</option>
                </select>
            <br><br>
            <!-- planos -->
            <label for="planos">Selecione o Plano desejado:</label><br>
                <select name="planos" id="planos">
                    <option value=""selected disabled >Selecione...</option>
                    <option value="diaria">Diária</option>
                    <option value="3xsemana">3x Semana</option>
                    <option value="5xsemana">5x Semana</option>
                    <option value="7xsemana">7x Semana</option>
                </select>
            <br><br>
            <button type="submit" style="background-color: blueviolet; color: white;">Cadastrar</button>
        </form>
    </main>
    <footer>

    <nav>
        <img src="assets/logo.png" width="200" alt="">
    </nav>
    <nav style="text-align: center;">
        <img src="assets/icone.png" width="100" alt="">
    </nav>
    </footer>
</body>
</html>
