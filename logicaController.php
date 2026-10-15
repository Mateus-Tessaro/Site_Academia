<?php

require_once 'planos.php';

$aluno = [
    "nome" => $_POST["nome"],
    "idade" => (int)$_POST["idade"],
    "cpf" => $_POST["cpf"],
    "peso" => (float)$_POST["peso"],
    "altura" => (float)$_POST["altura"],
    "genero" => $_POST["pergunta"],
    "treino" => $_POST["treinos"],
    "plano" => $_POST["planos"]
];

session_start();

$_SESSION['nome'] = $_POST["nome"];
$_SESSION['idade'] = (int)$_POST["idade"];
$_SESSION['cpf'] = $_POST["cpf"];
$_SESSION['peso'] = $_POST["peso"];
$_SESSION['altura'] = $_POST["altura"];
$_SESSION['genero'] = $_POST["pergunta"];

// Primeira função

function calcularIMC($peso, $altura){
    return $peso / ($altura * $altura);
}

// Segunda função

function classificarIMC($imc, $idade){
    if ($idade < 60){
        if ($imc < 18.5) {
            return "Abaixo do peso";
        } elseif ($imc < 25) {
            return "Peso adequado";
        } elseif ($imc < 30) {
            return "Sobrepeso";
        } else {
            return "Obesidade";
        }
    }
    else{
        if ($imc < 21) {
            return "Abaixo do peso";
        } elseif ($imc < 26) {
            return "Peso adequado";
        } elseif ($imc < 28) {
            return "Sobrepeso";
        } else {
            return "Obesidade";
        }
    }
}

// Terceira função

function definirTreino($treino){
    $treinos = [
        "ppl" => "PPL (Push, Pull, Legs)",
        "fullbody" => "Full Body (Corpo todo)",
        "abcd" => "ABCD (um grupo muscular por dia)",
        "upperlower" => "Upper/Lower (Superior e Inferior)"
    ];

    return $treinos[$treino];
}

$imc = calcularIMC($aluno["peso"], $aluno["altura"]);

$classificacao = classificarIMC($imc, $aluno["idade"]);

$nomeTreino = definirTreino($aluno["treino"]);

foreach ($planos as $chave => $dadosPlano) {

    if ($aluno["plano"] == $chave) {

        $nomePlano = $dadosPlano["nome"];
        $valorPlano = $dadosPlano["valor"];
        $diasTreino = $dadosPlano["dias"];

    }
}

$_SESSION['imc'] = $imc;
$_SESSION['classificacao'] = $classificacao;
$_SESSION['nometreino'] = $nomeTreino;
$_SESSION['nomeplano'] = $nomePlano;
$_SESSION['valorplano'] = $valorPlano;


require_once 'view_saida_cadastro.php';
