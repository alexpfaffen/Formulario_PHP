<html lang="Pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Aula PHP</title>
</head>
<body>
    
    <h1>Aqui vai ser Listado os usuários</h1> <br /> <br /> <br />
    <?php
        include_once "Classes/Connection.php";
        include_once "Classes/User.php";
        include_once "Classes/UserDAO.php";

        $search_user =UserDAO::UserList();
        foreach($search_user as $user){
            echo '<h4>'.$user['name_user'].' : '.$user['email_user']. '</h4>
            <br/><a href="#" class="btn">Alterar</a> &nbsp; <br/><a href="#" class="btn">Excluir</a> &nbsp <br/>';
        }

    
    
    ?>
    <br/><br/><br/>
    <a href="content/cadastrar_usuario.php" class="btn">Cadastrar</a>



    <!-- <?php
        echo "<h2> olá, teste php</h2>"

    ?> -->
</body>
</html>