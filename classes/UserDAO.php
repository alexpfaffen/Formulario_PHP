<?php

class UserDAO{

    // Função p/ Adicionar um usuário

    public static function UserAdd(User $objUser){
        // Fazera conexão com banco de dados
        $pdo = Connection::getConnection();

        // Tratar os erros
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);

        // Preparar o comando SQL para cadastrar
        $stmt = $pdo->prepare("INSERT INTO user(name_user, email_user) VALUES(?, ?)");
        $stmt->bindValue(1, $objUser->getName(), PDO::PARAM_STR);
        $stmt->bindValue(2, $objUser->getEmail(), PDO::PARAM_STR);

        $array = $stmt->execute();
        if($srray === TRUE){
            return TRUE;
        }else{
            return FALSE;
        }
    }


    public static function UserUpdate(User $objUser){
        // Fazera conexão com banco de dados
        $pdo = Connection::getConnection();

        // Tratar os erros
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);

        // Preparar o comando SQL para cadastrar
        $stmt = $pdo->prepare("UPDATE user SET name_user = (?), email_user = (?) WHERE id_user = (?)");
        $stmt->bindValue(1, $objUser->getName(), PDO::PARAM_STR);
        $stmt->bindValue(2, $objUser->getEmail(), PDO::PARAM_STR);
        $stmt->bindValue(3, $objUser->getEmail(), PDO::PARAM_INT);

        $array = $stmt->execute();
        return $array;
    }


    public static function UserList(){
        // Fazera conexão com banco de dados
        $pdo = Connection::getConnection();

        // Tratar os erros
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);

        // Preparar o comando SQL para cadastrar
        $stmt = $pdo->prepare("SELECT * FROM user");

        $stmt->execute();
        // Caso ele ache os valores correspondentes do seu comando SQL
        // Transforma num array
        $array = $stmt->fetchAll();
        if(is_array($array)){
            return $array;
        }else{
            return FALSE;
        }
    }


    public static function UserListID(User $objUser ){
        // Fazera conexão com banco de dados
        $pdo = Connection::getConnection();

        // Tratar os erros
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);

        // Preparar o comando SQL para cadastrar
        $stmt = $pdo->prepare("SELECT * FROM user WHERE id_user = (?)");
        $stmt->bindValue(1, $objUser->getID(), PDO::PARAM_INT);
     
        $stmt->execute();

        // Caso ele ache os comandos do seu SQL
        // Transforma num Array

        $array = $stmt->fetchAll();
        if(is_array($array)){
            return $array;
        }else{
            return FALSE;
        }
    }


    public static function UserDelete(User $objUser){
        // Fazera conexão com banco de dados
        $pdo = Connection::getConnection();

        // Tratar os erros
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);

        // Preparar o comando SQL para cadastrar
        $stmt = $pdo->prepare("DELETE FROM user WHERE ID_USER = (?)");
        $stmt->bindValue(1, $objUser->getID(), PDO::PARAM_INT);
      

        $array = $stmt->execute();
        if($srray === TRUE){
            return TRUE;
        }else{
            return FALSE;
        }
    }

}