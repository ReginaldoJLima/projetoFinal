<?php
include_once 'app/painelAdm/helpers/conexao.php';

function verificaSeLogado()
{
    $usuario = trim($_POST['usuario']);
    $resultConexao = new Conexao();

    $parametros = array(
        ':usuario' => $usuario
    );

    $resultadoConsulta = $resultConexao->consultarBanco(
        'SELECT * FROM usuarios 
                                                        WHERE nome = :usuario',
        $parametros
    );

    if (count($resultadoConsulta) > 0) {
        //adiciona sessão
        $_SESSION['usuario'] = $usuario;
        return true;
    } else {
        //usuario e senha não confere
        echo 'Usuário e senha não confere';
    }
}

function inserirUsuario()
{
    //Pegando as variáveis via post
    $nome = trim($_POST['nome']);
    $senha = trim($_POST['senha']);

    //Validar as variáveis e encriptar a senha
    $parametros = array(
        ':nome' => $nome,
        ':senha' => password_hash($senha, PASSWORD_DEFAULT)
    );

    $resultDados = new Conexao();
    $resultDados->intervencaoNoBanco("INSERT INTO usuarios(nome, senha) VALUES (:nome, :senha)", $parametros);
    include_once "app/painelAdm/paginas/usuarios-listar.php";
}
function atualizarUsuario()
{

    //Pegando as variáveis via POST
    $idUsuario = trim($_POST['id']);
    $senha = trim($_POST['senha']);

    //Validando as variáveis
    $parametros = array(
        ':id_usuario' => $idUsuario,
        ':senha' => $senha
    );

    //Atualizando no banco
    $atualizaUsuario = new Conexao();

    $atualizaUsuario->intervencaoNoBanco(
        'UPDATE usuarios 
    SET senha = :senha WHERE id_usuario = :id_usuario',
        $parametros
    );
    include_once "app/painelAdm/paginas/usuarios-listar.php";
}
function visualizarUsuario(){
    //Criar a função de visualizar usuário
}