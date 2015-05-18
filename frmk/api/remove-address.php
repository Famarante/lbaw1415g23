<?php
    include_once('../config/init.php');
    include_once($BASE_DIR .'database/users.php');  

    global $conn;

    $morada = $_POST['morada'];
    $rua = $morada['rua'];
    $codigo = $morada['codigo'];

    $result = $conn->prepare("SELECT idmorada FROM morada JOIN codigopostal ON morada.idcodigopostal=codigopostal.idcodigopostal WHERE rua=? AND codigo=?");
    $result->execute(array($rua, $codigo));
    $resultado = $result->fetch();

    $stmt = $conn->prepare("DELETE FROM moradascliente WHERE idmorada = ?");
    $stmt->execute(array($resultado['idmorada']));

    $stmt = $conn->prepare("DELETE FROM morada WHERE idmorada = ?");
    $stmt->execute(array($resultado['idmorada']));

    echo "Removido com sucesso";

?>
