<?php
  include_once('../../config/init.php');
  include_once($BASE_DIR .'database/users.php');  
  
  if (!$_POST['fullname'] || !$_POST['username'] || !$_POST['email'] || !$_POST['password'] || !$_POST['rpassword']) {
    $_SESSION['error_messages'][] = 'Campos marcados com * sao obrigatorios';
    $_SESSION['form_values'] = $_POST;
    header("Location: $BASE_URL" . 'pages/users/register.php');
    exit;
  }

  else if($_POST['password'] !== $_POST['rpassword']){
    $_SESSION['error_messages'][] = "As passwords nao coincidem";
    $_SESSION['form_values'] = $_POST;
      header("Location: $BASE_URL" . 'pages/users/register.php');
      exit;
  }

  $name = $_POST['fullname'];  
  $username = $_POST['username'];
  $password = $_POST['password'];
  $email = $_POST['email'];
  $nif = $_POST['nif']; 
  $address = $_POST['address'];
  $city = $_POST['city'];
  $zipcode = $_POST['zipcode'];
  $country = $_POST['country'];
  $phone = $_POST['phone'];
  


  try{
       createUser($username, $password, $name, $email, $address, $city, $zipcode, $country, $nif, $phone);
      
  }catch(PDOException $e){
    print($e->getMessage());
       
    $_SESSION['form_values'] = $_POST;
    header("Location: $BASE_URL" . 'pages/users/register.php');
  }

  $_SESSION['success_messages'][] = 'Cliente registado com sucesso';  
  header("Location: $BASE_URL");

?>
