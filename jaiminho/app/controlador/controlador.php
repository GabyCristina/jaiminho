<?php
/**
 * Created by PhpStorm.
 * User: aluno
 * Date: 04/05/18
 * Time: 15:45
 */

require_once "../models/CrudUsuario.php";


if (isset($_GET['acao'])){
$acao = $_GET['acao'];
}else{
    $acao = 'index';
}

switch ($acao) {

    case 'index':

        if (isset($_GET['iduser'])){
            @session_start();
            $_SESSION['id'] = $_GET['iduser'];
        }
        include "../viewa/index.php";

        break;


    case 'cadastrar';
        if (!isset($_POST['gravar'])) { // se ainda nao tiver preenchido o form
            include '../viewa/register.php';
        } else {

            // depois de preencher o formulario

                $nome = $_POST['nome'];
                $senha = $_POST['senha'];
                $email = $_POST['email'];
                $login = $_POST['login'];

                $novoUsuario = new Usuario($nome, $email, $login, $senha);
                $crud = new CrudUsuarios();
                $iduser = $crud->insertUsuario($novoUsuario);

                header('Location: ?acao=login');

            };

        break;

    case 'login':
        if (!isset($_POST['gravar'])) { //primeiro clique - exibir formulario
            include '../viewa/login.php';
        } else {
            //depois de clicar em entrar
            $login = $_POST['login'];
            $senha = $_POST['senha'];
            $crud = new CrudUsuarios();
            $resultado = $crud->verificaLogin($login, $senha);
            if($resultado == 0){
                //SE DER ERRADO O LOGIN VOLTA COPM MSG DE ERRO
                header("Location: ?acao=login&erro=loginInvalido");
                die;
            }else{
                $usuario = $crud->getUsuarioLogin($login);
                $iduser = $usuario->id_user;
                header("Location: ?iduser=$iduser");
            }
            die;
//                $_SESSION['senha'] = $usuario['senha'];
//                $_SESSION['login'] = $usuario['login'];
//                $_SESSION['id_user'] = $usuario['id_user'];
//                $_SESSION['id_tip_user'] = $usuario['id_tip_user'];

        }

        break;

    case 'logout':
        session_start();
        session_destroy();
        include "../viewa/login.php";
        break;

    case 'deletarUsuario':
        $id_user = $_SESSION['id_user'];
        $crud1 = new CrudUsuarios();
        $delete = $crud1->deleteUsuario($id_user);

        session_destroy();
        header('location: ../login.php');
        break;

    case 'esqueceuSenha':

        include "../viewa/forgot-password.php";

        break;
}

