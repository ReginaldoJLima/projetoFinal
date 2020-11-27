<?php
include_once 'app/painelAdm/helpers/conexao.php';

// Header
include_once "app/site/paginas/includes/header.php";

// Menu de navegação 
include_once "app/site/paginas/includes/navegacao.php";

// Páginas do meu Site 
$paginas = isset($_GET['pg']);

if ($paginas) {
    # code...
    switch ($_GET['pg']) {

        case 'inicial':
            include_once "app/site/paginas/inicial.php";
            break;

        case 'produtos':
            include_once "app/site/paginas/produtos.php";
            break;

        case 'contato':
            include_once "app/site/paginas/contato.php";
            break;

        case 'validaLogin':
            include_once "app/site/paginas/validaLogin.php";
            break;

        case 'cad_mensagem':
            //Criar Tabela CONTATO no banco - OK
            //Pegar as variáveis via post
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {

                $nome = $_POST['nome'];
                $email = $_POST['email'];
                $cat = $_POST['cat'];
                $msg = $_POST['msg'];

                $parametos = array(
                    ':nome' => $nome,
                    ':email' => $email,
                    ':cat' => $cat,
                    ':msg' => $msg,
                );

                $inserirMSG = new Conexao();
                $inserirMSG->intervencaoNoBanco('INSERT 
                INTO contato (nome, email, cat, msg) 
                VALUES (:nome, :email, :cat, :msg)', $parametos);
                header('Location: ?pg=contato');
            } else {
            }


            //Validar os parâmetros
            //inserir no banco de dados
            //retornar a tela de contato
            echo 'chegando!';

            break;

        default:
            include_once "app/site/paginas/inicial.php";
            break;
    }
} else {
    include_once "app/site/paginas/inicial.php";
}

// Rodapé
include_once "app/site/paginas/includes/footer.php";
