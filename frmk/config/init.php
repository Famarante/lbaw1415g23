<?php
  //session_set_cookie_params(3600, '/~lbaw1423'); //FIXME
  session_start();
  error_reporting(E_ERROR | E_WARNING); // E_NOTICE by default

  $BASE_DIR = 'E:/xampp/htdocs/xampp/frmk_loja/'; //FIXME
  $BASE_URL = '/xampp/frmk_loja/'; //FIXME

  $conn = new PDO('pgsql:host=vdbm.fe.up.pt;dbname=lbaw1423', 'lbaw1423', 'rP298ck6'); //LIGADO À VPN
  //$conn = new PDO('pgsql:host=localhost;dbname=lojaDB', 'postgres', 'root'); //LOCAL
  $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  $conn->exec('SET SCHEMA \'loja\''); //FIXME

  include_once($BASE_DIR . 'lib/smarty/Smarty.class.php');
  
  $smarty = new Smarty;
  $smarty->template_dir = $BASE_DIR . 'templates/';
  $smarty->compile_dir = $BASE_DIR . 'templates_c/';
  $smarty->assign('BASE_URL', $BASE_URL);
  
  $smarty->assign('ERROR_MESSAGES', $_SESSION['error_messages']);  
  $smarty->assign('FIELD_ERRORS', $_SESSION['field_errors']);
  $smarty->assign('SUCCESS_MESSAGES', $_SESSION['success_messages']);
  $smarty->assign('FORM_VALUES', $_SESSION['form_values']);
  $smarty->assign('USERNAME', $_SESSION['username']);
  $smarty->assign('USERID', $_SESSION['userid']);
  $smarty->assign('ADMIN_USERNAME', $_SESSION['admin_username']);

  
  unset($_SESSION['success_messages']);
  unset($_SESSION['error_messages']);  
  unset($_SESSION['field_errors']);
  unset($_SESSION['form_values']);
  
?>
