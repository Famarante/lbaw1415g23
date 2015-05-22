<?php
  include_once('../config/init.php');
  include_once($BASE_DIR .'database/users.php');  

    global $conn;
    
    $result = $conn->query("SELECT utilizador.username, utilizador.idutilizador, cliente.suspenso FROM utilizador JOIN cliente ON cliente.idcliente = utilizador.idutilizador");
    $result = $result->fetchAll();

    echo json_encode($result);

?>
