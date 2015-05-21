<?php
  
  //Código para registar e logar utilizadores

    $userid = $_SESSION['userid'];

    function createUser($username, $password, $fullname, $email, $nif, $phone) {
        global $conn;
        
        $conn->beginTransaction();
        
        $stmt = $conn->prepare("INSERT INTO utilizador (username, password) VALUES (?, ?)");
        $stmt->execute(array($username, sha1($password)));
        
        $resultUser = $conn->prepare("SELECT idutilizador FROM utilizador WHERE username=?");
        $resultUser->execute(array($username));
        $resultUser = $resultUser->fetch();
        
        if(empty($phone)){
            if(empty($nif)){
                $stmt = $conn->prepare("INSERT INTO cliente (nome, email, idcliente) VALUES (?, ?, ?)");
                $stmt->execute(array($fullname, $email, $resultUser['idutilizador']));
            }
            else{
                $stmt = $conn->prepare("INSERT INTO cliente (nome, email, nif, idcliente) VALUES (?, ?, ?, ?)");
                $stmt->execute(array($fullname, $email, $nif, $resultUser['idutilizador']));
            }

        }
        else{
            if(empty($nif)){
                $stmt = $conn->prepare("INSERT INTO cliente (nome, email, telemovel, idcliente) VALUES (?, ?, ?, ?)");
                $stmt->execute(array($fullname, $email, $phone, $resultUser['idutilizador']));
            }
            else{
                $stmt = $conn->prepare("INSERT INTO cliente (nome, email, nif, telemovel, idcliente) VALUES (?, ?, ?, ?, ?)");
                $stmt->execute(array($fullname, $email, $nif, $phone, $resultUser['idutilizador']));
            }
        }
        
        $conn->commit();
    
    }

    function isLoginCorrect($username, $password) {
        global $conn;
        $result = $conn->prepare("SELECT password FROM utilizador WHERE username=?");
        $result->execute(array($username));
        $result = $result->fetch();
        return $result['password'] === sha1($password);
    }

    function isSuspended($username){
        global $conn;
        $result = $conn->prepare("SELECT cliente.suspenso FROM utilizador JOIN cliente ON utilizador.idutilizador=cliente.idcliente WHERE username=?");
        $result->execute(array($username));
        $result = $result->fetch();
        return $result['suspenso'];
    }

    function getClientData() {
        global $conn;
        $userid = $_SESSION['userid'];
        
        $result = $conn->prepare("SELECT * FROM cliente WHERE idcliente=?");
        $result->execute(array($userid));
        $result = $result->fetch();
        
        $email = $result['email'];       
        $fullname = $result['nome'];
        $nif = $result['nif'];
        $phone = $result['telemovel'];       
        
        $result = $conn->prepare("SELECT * FROM utilizador WHERE idutilizador=?");
        $result->execute(array($userid));
        $result = $result->fetch();
        
        $username = $result['username'];
        $password = $result['password'];
        
        $result = $conn->prepare("SELECT idmorada FROM moradascliente WHERE idcliente=?");
        $result->execute(array($userid));
        $result = $result->fetch();
        
        $idaddress = $result['idmorada'];
        
        if($idaddress > 0){
            $result = $conn->prepare("SELECT rua,idcodigopostal FROM morada WHERE idmorada=?");
            $result->execute(array($idaddress));
            $result = $result->fetch();

            $address = $result['rua'];
            $idzipcode = $result['idcodigopostal'];
            if($idzipcode > 0){
                $result = $conn->prepare("SELECT codigo,idlocalidade FROM codigopostal WHERE idcodigopostal=?");
                $result->execute(array($idzipcode));
                $result = $result->fetch();

                $zipcode = $result['codigo'];
                $idcity = $result['idlocalidade'];
                if($idcity>0){
                    $result = $conn->prepare("SELECT nome,idpais FROM localidade WHERE idlocalidade=?");
                    $result->execute(array($idcity));
                    $result = $result->fetch();

                    $city = $result['nome'];
                    $idcountry = $result['idpais'];
                    if($idcountry>0){
                        $result = $conn->prepare("SELECT nome FROM pais WHERE idpais=?");
                        $result->execute(array($idcountry));
                        $result = $result->fetch();

                        $country = $result['nome'];
                    }
                }
            }
        }
        
        $userdata = array('username' => $username, 
                          'password' => $password,
                          'fullname' => $fullname,
                          'email' => $email,
                          'address' => $address,
                          'zipcode' => $zipcode,
                          'city' => $city,
                          'country' => $country,
                          'nif' => $nif,
                          'phone' => $phone);
                          
        return $userdata;

    }

    function updateUsername($username){
        global $userid;
        global $conn;
        $stmt = $conn->prepare("UPDATE utilizador SET username=? WHERE idutilizador=?");
        $stmt->execute(array($username, $userid));
        $_SESSION['username'] = $username;
    }

    function updatePassword($password){
        global $userid;
        global $conn;
        $stmt = $conn->prepare("UPDATE utilizador SET password=? WHERE idutilizador=?");
        $stmt->execute(array($password, $userid));
    }

    function updateFullname($fullname){
        global $userid;
        global $conn;
        $stmt = $conn->prepare("UPDATE cliente SET nome=? WHERE idcliente=?");
        $stmt->execute(array($fullname, $userid));
    }

    function updateEmail($email){
        global $userid;
        global $conn;
        $stmt = $conn->prepare("UPDATE cliente SET email=? WHERE idcliente=?");
        $stmt->execute(array($email, $userid));
    }

    function updateNif($nif){
        global $userid;
        global $conn;
        $stmt = $conn->prepare("UPDATE cliente SET nif=? WHERE idcliente=?");
        $stmt->execute(array($nif, $userid));
    }

    function updatePhone($phone){
        global $userid;
        global $conn;
        $stmt = $conn->prepare("UPDATE cliente SET telemovel=? WHERE idcliente=?");
        $stmt->execute(array($phone, $userid));
    }

    function updateAddress($address,$zipcode,$city,$country){
        global $userid;
        global $conn;
        
        $result = $conn->prepare("SELECT idmorada FROM moradascliente WHERE idcliente=?");
        $result->execute(array($userid));
        $result = $result->fetch();
        
        $idaddress = $result['idmorada'];
        
        $result = $conn->prepare("SELECT idcodigopostal FROM morada WHERE idmorada=?");
        $result->execute(array($idaddress));
        $result = $result->fetch();
        
        $idzipcode = $result['idcodigopostal'];
        
        $stmt = $conn->prepare("UPDATE morada SET rua=? where idmorada=?");
        $stmt->execute(array($address, $idaddress));
        
        $stmt = $conn->prepare("UPDATE codigopostal SET codigo=? where idcodigopostal=?");
        $stmt->execute(array($zipcode, $idzipcode));
        
        $result = $conn->prepare("SELECT idlocalidade FROM codigopostal WHERE idcodigopostal=?");
        $result->execute(array($idzipcode));
        $result = $result->fetch();
        
        $idcity = $result['idlocalidade'];
        
        $stmt = $conn->prepare("UPDATE localidade SET nome=? where idlocalidade=?");
        $stmt->execute(array($city, $idcity));
        
        $result = $conn->prepare("SELECT idpais FROM localidade WHERE idlocalidade=?");
        $result->execute(array($idcity));
        $result = $result->fetch();
        
        $idcountry = $result['idpais'];
        
        $stmt = $conn->prepare("UPDATE pais SET nome=? where idpais=?");
        $stmt->execute(array($country, $idcountry));
    }

?>
