<?php
    class Conexao{
        function conectar(){
            try{
                $conn = new PDO('mysql:host=localhost;dbname=dsw_cherno&byls','root','');
                $conn ->  setAttribute(PDO:: ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                return $conn;
            }catch(PDOException $e){
                echo "<script>alert('Não foi possível conectar ao BD!'); console.log(" . $e -> getMessage() .") </script>";
            }
        }
    }
?>