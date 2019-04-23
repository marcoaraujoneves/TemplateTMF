<?php
    session_start();
    
    if(!isset($_SESSION['nome'])){
        header('Location: index.php?erro=1');
    } else{
        if(isset($_GET['mod'])){
            $_SESSION['menuAtivo'] = $_GET['mod'];
            switch($_GET['mod']){
                case '1':
                    require_once('mod_servicos.php');
                    break;
                case '2':
                    require_once('mod_produtos.php');
                    break;
                case '3':
                    require_once('mod_portifolio.php');
                    break;
                case '4':
                    require_once('mod_mensagens.php');
                    break;
                case '5':
                    require_once('mod_conteudo.php');
                    break;
                case '6':
                    require_once('mod_newsletter.php');
                    break;
                default:
                    require_once('mod_servicos.php');
                    break;
            }
        }
    }
?>