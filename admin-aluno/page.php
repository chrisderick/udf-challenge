<?php
//includes das paginas

    switch(@$_REQUEST ["page"]){

        //Abas do MENU PRINCIPAL =========================================================
        case 'home':
            include("home/home.php");
        break;

        //Aba nome
        case 'perfil':
            include("perfil/editar-perfil.php");
        break;

        //Aba academica
        case 'quest':
            include("academico/questoes.php");
        break;

        case 'rank':
            include("academico/rank.php");
        break;

        case 'historico':
            include("academico/historico.php");
        break;
    
        //Centrla de duvida
        case 'faq':
            include("duvida/faq.php");
        break;
        // Fim das Abas ==================================================================

        //Outras funcionalidades do sistemas
        case 'edit-perfil':
            include("perfil/salvar-edicao.php");
        break;

        case 'delete-aluno':
            include("perfil/deletar-perfil.php");
        break;


    
    //Home Dashboard       
    default:
        include("home/home.php");
    }  
?>