<?php

    abstract class Connection{

        public static function getConnection(){
            try{
                // instanciar o Objeto de conexão
                $pdo = new PDO('mysql:dbname=userphp; host=127.0.0.1','root', '');
                return $pdo;
            }
            catch(PDOException $ex){
                echo '<br/> >> ERRO:' .$ex->getMessage();
                echo '<br/> >> LINHA:' .$ex->getLine();
                echo '<br/> >> ARQUIVO:' .$ex->getFile();
            }
        }
    }