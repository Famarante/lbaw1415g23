<?php
    include_once('../config/init.php');
    include_once($BASE_DIR .'database/users.php');  

    global $conn;

    $country = $_POST['country'];
    $city = $_POST['city'];
    $zip = $_POST['zipcode'];
    $address = $_POST['address'];
    $id = $_SESSION['userid'];

    $counID = $conn->prepare("SELECT idpais FROM pais WHERE nome=?");
    $counID->execute(array($country));
    $counID = $counID->fetch();
    $ctrID = $counID['idpais'];

    if(empty($ctrID)){
        $stmt = $conn->prepare("INSERT INTO pais (nome) VALUES (?)");
        $stmt->execute(array($country));
        
        $counID = $conn->prepare("SELECT idpais FROM pais WHERE nome=?");
        $counID->execute(array($country)):
        $counID = $counID->fetch();
        $ctrID = $counID['idpais'];
    }

    $cityID = $conn->prepare("SELECT idlocalidade FROM localidade WHERE nome=? AND idpais=?");
    $cityID->execute(array($city, $ctrID));
    $cityID = $cityID->fetch();
    $ctyID = $cityID['idlocalidade'];

    if(empty($ctyID)){
        $stmt = $conn->prepare("INSERT INTO localidade (nome,idpais) VALUES (?,?)");
        $stmt->execute(array($city, $ctrID));

        $cityID = $conn->prepare("SELECT idlocalidade FROM localidade WHERE nome=? AND idpais=?");
        $cityID->execute(array($city, $ctrID));
        $cityID = $cityID->fetch();
        $ctyID = $cityID['idlocalidade'];
    }

    $zipID = $conn->prepare("SELECT idcodigopostal FROM codigopostal WHERE codigo=? AND idlocalidade=?");
    $zipID->execute(array($zip, $ctyID));
    $zipID = $zipID->fetch();
    $zpID = $zipID['idcodigopostal'];

    if(empty($zpID)){
        $stmt = $conn->prepare("INSERT INTO codigopostal (codigo,idlocalidade) VALUES (?,?)");
        $stmt->execute(array($zip, $ctyID));

        $zipID = $conn->prepare("SELECT idcodigopostal FROM codigopostal WHERE codigo=? AND idlocalidade=?");
        $zipID->execute(array($zip, $ctyID));
        $zipID = $zipID->fetch();
        $zpID = $zipID['idcodigopostal'];
    }
    
    $addrID = $conn->prepare("SELECT idmorada FROM morada WHERE rua=? AND idcodigopostal=?");
    $addrID->execute(array($address, $zpID));
    $addrID = $addrID->fetch();
    $addID = $addrID['idmorada'];

    if(empty($addID)){
        $stmt = $conn->prepare("INSERT INTO morada (rua,idcodigopostal) VALUES (?,?)");
        $stmt->execute(array($address, $zpID));

        $addrID = $conn->prepare("SELECT idmorada FROM morada WHERE rua=? AND idcodigopostal=?");
        $addrID->execute(array($address, $zpID));
        $addrID = $addrID->fetch();
        $addID = $addrID['idmorada'];
    }

    $stmt = $conn->prepare("INSERT INTO moradascliente (idmorada,idcliente) VALUES (?,?)");
    $stmt->execute(array($addID, $id));

    header('Location: ' . $_SERVER['HTTP_REFERER']);                                                                        

?>
