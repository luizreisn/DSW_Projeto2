<?php
    class ContatoDAO{
        function listar($conn){
            $consulta = $conn -> query("SELECT * FROM contato");
            echo '
            <!DOCTYPE html>
            <html lang="pt-br">
            
            <head>
                <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
                    integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
                <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet">
                <link rel="stylesheet" href="\DSW_ProjetoAdm\visao\pages\contato\contato.css">
                <link rel="icon" href="/DSW_ProjetoAdm/visao/pages/img/logo.png">
                <meta charset="UTF-8">
                <meta http-equiv="X-UA-Compatible" content="IE=edge">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>Cherno & Byl´s</title>
            </head>

            <body>

                <nav class="navbar navbar-dark navbar-expand-sm fixed-top">
                    <div class="container">
                        <a class="navbar-left"><img class="imgLogo" src="/DSW_ProjetoAdm/visao/pages/img/logo.png" alt="Logo Cherno & Byl´s"></a>
                        <div>
                            <ul class="navbar-nav ml-auto">
                                <li class="nav-item"><a class="nav-link" href="/DSW_ProjetoAdm/visao/pages/home/home.html">Home</a></li>
                                <li class="nav-item"><a class="nav-link" href="/DSW_ProjetoAdm/visao/pages/perfil/perfil.html">Perfil</a></li>
                                <li class="nav-item active"><a class="nav-link" href="/DSW_ProjetoAdm/controle/controleContato.php?flag=listar">Form Contato</a></li>
                                <li class="nav-item"><a class="nav-link" href="/DSW_ProjetoAdm/visao/pages/trabalhe/trabalhe.html">Form Trabalhe</a></li>
                                <li class="nav-item"><a class="nav-link" href="/DSW_ProjetoAdm/visao/pages/login/login.html">Sair <i class="fas fa-sign-out-alt"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </nav>';

            echo'
                <table class="table table-striped">
                    <tr>
                        <th>Id</th>
                        <th>Nome</th>
                        <th>Celular</th>
                        <th>E-Mail</th>
                        <th>Mensagem</th>
                    </tr>';

            while($linha = $consulta -> fetch(PDO::FETCH_ASSOC)){
                echo '
                    <tr>
                        <td>'.$linha['id'].'</td>
                        <td>'.$linha['nome'].'</td>
                        <td>'.$linha['celular'].'</td>
                        <td>'.$linha['email'].'</td>
                        <td>'.$linha['mensagem'].'</td>
                    </tr>';
            }
            
            
            echo '</tabel>';
            echo'
            
                <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
                    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
                </script>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
                    integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
                </script>
                <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
                    integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
                </script>
            </body>
            </html>';
            
        }
    }
?>