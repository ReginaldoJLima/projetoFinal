<?php

include_once 'app/painelAdm/helpers/conexao.php';

function verificaSeLogado()
{
    $usuario = trim($_POST['usuario']);
    $senha = trim($_POST['senha']);
    $parametros = array(
        ':usuario' => $usuario
    );
    $resultConexao = new Conexao();
    $resultadoConsulta = $resultConexao->consultarBanco(
        'SELECT * FROM usuarios WHERE nome = :usuario',
        $parametros
    );
    if (count($resultadoConsulta) > 0) {
        $senha_bd =  $resultadoConsulta[0]['senha'];
        if (password_verify($senha, $senha_bd)) {
            //adiciona sessão
            $_SESSION['usuario'] = $usuario;
            return true;
        } else {
            echo 'senha não confere';
            return false;
        }
    } else {
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
    $idUsuario = trim($_POST['id_usuario']);
    $senha = trim($_POST['senha']);

    //Validando as variáveis
    $parametros = array(
        ':id_usuario' => $idUsuario,
        ':senha' => password_hash($senha, PASSWORD_DEFAULT)
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

function visualizarUsuario($id)
{
    if ($id) {
        $parametros = array(
            ':id_usuario' => $_GET['id']
        );

        $resultUsuarioConsulta = new Conexao();

        $dados = $resultUsuarioConsulta->consultarBanco('SELECT * FROM 
        usuarios WHERE id_usuario = :id_usuario', $parametros);

        if (count($dados) > 0) {

            return $dados;
        } else {
            Header('Location: ?pg=usuarios-listar');
        }
    }
}
