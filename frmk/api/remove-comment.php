<?php
    include_once('../config/init.php');
    include_once($BASE_DIR .'database/comments.php');  

    global $conn;

    $idcomentario = $_GET['idcomentario'];

    removeComment($idcomentario);

    echo json_encode("removeu com sucesso");

?>
