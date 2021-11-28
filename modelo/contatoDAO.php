<?php
    class ContatoDAO{
        function listar($conn){


            echo " <!doctype html>
               <html lang='pt-br'>
               <head>
               <meta charset='utf-8'>
               <meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no'>
               <title>Clientes</title>
               <link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css'>
               </head>
               <body class='container'>";

            $consulta = $conn -> query("SELECT * FROM contato");
            $registros = $consulta -> rowCount();

            if($registros){
                echo'
                <table class="table table-striped">
                    <tr style="color:white;">
                        <th style="background-color:#682a8f;">Id</th>
                        <th style="background-color:#682a8f;">Nome</th>
                        <th style="background-color:#682a8f;">Celular</th>
                        <th style="background-color:#682a8f;">E-Mail</th>
                        <th style="background-color:#682a8f;">Mensagem</th>
                        <th style="background-color:#682a8f;">Ações</th>
                    </tr>';

                while($linha = $consulta -> fetch(PDO::FETCH_ASSOC)){
                    echo '
                        <tr style="color:white;">
                            <td>'.$linha['id'].'</td>
                            <td>'.$linha['nome'].'</td>
                            <td>'.$linha['celular'].'</td>
                            <td>'.$linha['email'].'</td>
                            <td>'.$linha['mensagem'].'</td>
                            <td> 
                                <form method="post" action="../controle/controle.php"> 
                                    <div class="d-flex justify-content-center">
                                        <input style="margin-bottom:20px" class="btn btn-danger mr-3" type="submit" name="botao_excluir" value="Excluir">
                                    </div>
                                    <div class="d-flex justify-content-center">
                                        <input style="margin-bottom:20px" type="hidden" name="id_excluir" value="' . $linha["id"] . '"/>
                                    </div>
                                </form>
                            </td>
                        </tr>';
                }
            }else{
                echo "<p style='font-size:28px; color:red'>Não há registros!<p>";
            }
        }
    }
?>