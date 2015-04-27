<?php
  
  //Código para registar e logar utilizadores

    $userid = $_SESSION['userid'];

    function createUser($username, $password, $fullname, $email, $address, $city, $zipcode, $country, $nif, $phone) {
        global $conn;
        
       
        $stmt = $conn->prepare("INSERT INTO utilizador (username, password) VALUES (?, ?)");
        $stmt->execute(array($username, sha1($password)));
        
        $resultUser = $conn->query("SELECT idutilizador FROM utilizador WHERE username='$username'");
        $resultUser = $resultUser->fetch();
        
        if(!isset($phone)){
            if(!isset($nif)){
                $stmt = $conn->prepare("INSERT INTO cliente (nome, email, idcliente) VALUES (?, ?, ?)");
                $stmt->execute(array($fullname, $email, $resultUser['idutilizador']));
            }
            else{
                $stmt = $conn->prepare("INSERT INTO cliente (nome, email, nif, idcliente) VALUES (?, ?, ?, ?)");
                $stmt->execute(array($fullname, $email, $nif, $resultUser['idutilizador']));
            }

        }
        else{
            if(!isset($nif)){
                $stmt = $conn->prepare("INSERT INTO cliente (nome, email, telemovel, idcliente) VALUES (?, ?, ?, ?)");
                $stmt->execute(array($fullname, $email, $phone, $resultUser['idutilizador']));
            }
            else{
                $stmt = $conn->prepare("INSERT INTO cliente (nome, email, nif, telemovel, idcliente) VALUES (?, ?, ?, ?, ?)");
                $stmt->execute(array($fullname, $email, $nif, $phone, $resultUser['idutilizador']));
            }
        }
    
        $stmt = $conn->prepare("INSERT INTO pais (nome) VALUES (:nome)");
        $stmt->bindParam(':nome', $country);
        $stmt->execute();
        
        $result = $conn->query("SELECT idpais FROM pais WHERE nome='$country'");
        $result = $result->fetch();
        $stmt = $conn->prepare("INSERT INTO localidade (nome, idpais) VALUES (?, ?)");
        $stmt->execute(array($city, $result['idpais']));

       
        $result = $conn->query("SELECT idlocalidade FROM localidade WHERE nome='$city'");
        $result = $result->fetch();
        $stmt = $conn->prepare("INSERT INTO codigopostal (codigo, idlocalidade) VALUES (?, ?)");
        $stmt->execute(array($zipcode, $result['idlocalidade']));
        
        
        $result = $conn->query("SELECT idcodigopostal FROM codigopostal WHERE codigo='$zipcode'");
        $result = $result->fetch();
        $stmt = $conn->prepare("INSERT INTO morada (rua, idcodigopostal) VALUES (?, ?)");
        $stmt->execute(array($address, $result['idcodigopostal']));
        $result = $conn->query("SELECT idmorada FROM morada WHERE rua='$address'");
        $result = $result->fetch();
        
        
        $result1 = $conn->query("SELECT idcliente FROM cliente WHERE nome='$fullname' AND nif='$nif'");
        $result1 = $result1->fetch();
        $stmt = $conn->prepare("INSERT INTO moradascliente (idmorada, idcliente) VALUES (?, ?)");
        $stmt->execute(array($result['idmorada'], $result1['idcliente']));
    
    }

    function isLoginCorrect($username, $password) {
        global $conn;
        $result = $conn->query("SELECT password FROM utilizador WHERE username='$username'");
        $result = $result->fetch();
        return $result['password'] === sha1($password);
    }

    function getClientData() {
        global $conn;
        $userid = $_SESSION['userid'];
        
        $result = $conn->query("SELECT * FROM cliente WHERE idcliente='$userid'");
        $result = $result->fetch();
        
        $email = $result['email'];       
        $fullname = $result['nome'];
        $nif = $result['nif'];
        $phone = $result['telemovel'];       
        
        $result = $conn->query("SELECT * FROM utilizador WHERE idutilizador='$userid'");
        $result = $result->fetch();
        
        $username = $result['username'];
        $password = $result['password'];
        
        $result = $conn->query("SELECT idmorada FROM moradascliente WHERE idcliente='$userid'");
        $result = $result->fetch();
        
        $idaddress = $result['idmorada'];
        
        if($idaddress > 0){
            $result = $conn->query("SELECT rua,idcodigopostal FROM morada WHERE idmorada='$idaddress'");
            $result = $result->fetch();

            $address = $result['rua'];
            $idzipcode = $result['idcodigopostal'];
            if($idzipcode > 0){
                $result = $conn->query("SELECT codigo,idlocalidade FROM codigopostal WHERE idcodigopostal='$idzipcode'");
                $result = $result->fetch();

                $zipcode = $result['codigo'];
                $idcity = $result['idlocalidade'];
                if($idcity>0){
                    $result = $conn->query("SELECT nome,idpais FROM localidade WHERE idlocalidade='$idcity'");
                    $result = $result->fetch();

                    $city = $result['nome'];
                    $idcountry = $result['idpais'];
                    if($idcountry>0){
                        $result = $conn->query("SELECT nome FROM pais WHERE idpais='$idcountry'");
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
        $stmt = $conn->prepare("UPDATE utilizador SET username=? WHERE idutilizador='$userid'");
        $stmt->execute(array($username));
        $_SESSION['username'] = $username;
    }

    function updatePassword($password){
        global $userid;
        global $conn;
        $stmt = $conn->prepare("UPDATE utilizador SET password=? WHERE idutilizador='$userid'");
        $stmt->execute(array($password));
    }

    function updateFullname($fullname){
        global $userid;
        global $conn;
        $stmt = $conn->prepare("UPDATE cliente SET nome=? WHERE idcliente='$userid'");
        $stmt->execute(array($fullname));
    }

    function updateEmail($email){
        global $userid;
        global $conn;
        $stmt = $conn->prepare("UPDATE cliente SET email=? WHERE idcliente='$userid'");
        $stmt->execute(array($email));
    }

    function updateNif($nif){
        global $userid;
        global $conn;
        $stmt = $conn->prepare("UPDATE cliente SET nif=? WHERE idcliente='$userid'");
        $stmt->execute(array($nif));
    }

    function updatePhone($phone){
        global $userid;
        global $conn;
        $stmt = $conn->prepare("UPDATE cliente SET telemovel=? WHERE idcliente='$userid'");
        $stmt->execute(array($phone));
    }

    function updateAddress($address,$zipcode,$city,$country){
        global $userid;
        global $conn;
        
        $result = $conn->query("SELECT idmorada FROM moradascliente WHERE idcliente='$userid'");
        $result = $result->fetch();
        
        $idaddress = $result['idmorada'];
        
        $result = $conn->query("SELECT idcodigopostal FROM morada WHERE idmorada='$idaddress'");
        $result = $result->fetch();
        
        $idzipcode = $result['idcodigopostal'];
        
        $stmt = $conn->prepare("UPDATE morada SET rua=? where idmorada = '$idaddress'");
        $stmt->execute(array($address));
        
        $stmt = $conn->prepare("UPDATE codigopostal SET codigo=? where idcodigopostal = '$idzipcode'");
        $stmt->execute(array($zipcode));
        
        $result = $conn->query("SELECT idlocalidade FROM codigopostal WHERE idcodigopostal = '$idzipcode'");
        $result = $result->fetch();
        
        $idcity = $result['idlocalidade'];
        
        $stmt = $conn->prepare("UPDATE localidade SET nome=? where idlocalidade = '$idcity'");
        $stmt->execute(array($city));
        
        $result = $conn->query("SELECT idpais FROM localidade WHERE idlocalidade = '$idcity'");
        $result = $result->fetch();
        
        $idcountry = $result['idpais'];
        
        $stmt = $conn->prepare("UPDATE pais SET nome=? where idpais = '$idcountry'");
        $stmt->execute(array($country));
    }

?>
