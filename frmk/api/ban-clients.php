<?php
    include_once('../config/init.php');
    include_once($BASE_DIR .'database/users.php');  

    global $conn;

    $arrayid = $_POST['idArray'];

    foreach($arrayid as $aID){
        $currentvalue = $conn->prepare("SELECT suspenso FROM cliente WHERE idcliente=?");
        $currentvalue->execute(array($aID));
        $currentvalue = $currentvalue->fetch();

        if($currentvalue['suspenso'])
            $stmt = $conn->prepare("UPDATE cliente SET suspenso='FALSE' where idcliente=?");
        else
            $stmt = $conn->prepare("UPDATE cliente SET suspenso='TRUE' where idcliente=?");

        $stmt->execute(array($aID));
    }
    echo json_encode($arrayid);

?>
