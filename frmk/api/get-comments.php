<?php
  include_once('../config/init.php');
  include_once($BASE_DIR .'database/comments.php');  

    $idproduto = $_GET['idproduto'];
    $admin = $_SESSION['admin_username'];

    $adminArr = array('admin' => $admin);

    global $conn;
    
    $result = $conn->prepare("SELECT idcomentario, texto, data, username FROM comentario JOIN utilizador ON utilizador.idutilizador = comentario.idutilizador WHERE idproduto = ?");
    $result->execute(array($idproduto));
    $result = $result->fetchAll();

    echo json_encode(array($result, $adminArr));
?>
