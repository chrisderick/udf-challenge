<?php
//Não sei pq caralhos tem que conectar novamente aqui mas ...
include("conexao-db.php");
//Start do login
session_start(); ob_start();
//Verificar se ele logou
include("../aluno/verifica.php");

    //Gambiarra para mostrar o nome do anluno
    $name = "SELECT nome_aluno FROM aluno WHERE email_aluno = '{$_SESSION['usuario']}'";

    $result = $conn->query($name) or die ($conn->error);

    $ecu = $result->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>UDF CHALLENGE - ALUNO LOBBY</title>

    <!-- CSS BOOTSTRAP  -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- CSS PERSONALIZADO  -->
    <link href="css/style.css" rel="stylesheet">
    <!-- Icone -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">

    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>

    <!-- Colocar o icone da aba do chrome -->
    <link rel="icon" href="./img/icon-da.png" type="image/vnd.microsoft.icon">

    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">

</head>
<body>

<div class="wrapper">
    <nav id="sidebar">

        <div class="sidebar-header">
            <img src="../img/semfund.png" class="img-fluid"/>
        </div>

        <ul class="list-unstyled components">

            <p>Painel de Controle</p>
            <li class="active">
                <a href="#usuarioSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                    <?php echo $ecu["nome_aluno"] ?>
                </a>
                <ul class="collapse list-unstyled" id="usuarioSubmenu">
                    
                    <li>
                        <a href="#">Perfil</a>
                    </li>
                    
                    <li>
                        <a href="#">Minhas Comunidades</a>
                    </li>
                    
                    <li>
                        <a href="#">Historico</a>
                    </li>
                
                </ul>
            </li>
            <li>
                <a href="#">Ranking</a>
            </li>

            <li><a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Moderador</a>
                <ul class="collapse list-unstyled" id="pageSubmenu">
                    
                    <li>
                        <a href="#">Criar Nova Comunidade</a>
                    </li>
                    
                    <li>
                        <a href="#">Comunidades Gerenciadas</a>
                    </li>
                    
                    <li>
                        <a href="#">Desafios</a>
                    </li>
                    
                </ul>
            </li>

            <li>
                <a href="#">Central de Dúvidas</a>
            </li>

            <li>
                <a class="active" href="../aluno/logout.php">Sair</a>
            </li>

        </ul>
    </nav>
    <div id="content">
        

        <button type="button" id="sidebarCollapse" class="btn btn-outline-info">
            <i class="far fa-arrow-alt-circle-left"></i>
        </button>

        <h2>Texto só pra ocupar espaço</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

        <div class="line"></div>

        <h2>Lorem Ipsum Dolor</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

        <div class="line"></div>

        <h2>Lorem Ipsum Dolor</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

        <div class="line"></div>

        <h3>Lorem Ipsum Dolor</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

    </div>
</div>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="js/jquery-3.3.1.slim.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<!-- jQuery Custom Scroller CDN -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script>


<script type="text/javascript">
    $(document).ready(function () {
        $("#sidebar").mCustomScrollbar({
            theme: "minimal"
        });

        $('#sidebarCollapse').on('click', function () {
            $('#sidebar, #content').toggleClass('active');
            $('.collapse.in').toggleClass('in');
            $('a[aria-expanded=true]').attr('aria-expanded', 'false');

        });

        $('#trocar').click(function() {
            var s = $(this);
            var originaltext= s.text();
            $('#trocar').text('Mostrar');
            s.text(originaltext);
            s.html(s.text() == 'Mostrar' ? 'Esconder' : 'Mostrar');

        })
    });
</script>

</body>
</html>