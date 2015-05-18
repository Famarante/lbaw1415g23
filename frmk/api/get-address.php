<?php
  include_once('../config/init.php');
  include_once($BASE_DIR .'database/users.php');  

    global $conn;
    
    $userid = $_SESSION['userid'];
    
    $result = $conn->prepare("SELECT rua, codigo FROM moradascliente JOIN morada ON moradascliente.idmorada = morada.idmorada JOIN codigopostal ON codigopostal.idcodigopostal=morada.idcodigopostal WHERE moradascliente.idcliente = ?");
    $result->execute(array($userid));
    $result = $result->fetchAll();
    
    echo json_encode($result);
?>
