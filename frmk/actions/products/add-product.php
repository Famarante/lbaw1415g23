<?php
include_once('../../config/init.php');
include_once($BASE_DIR .'database/products.php');

//TRATAMENTO ERROS PARA HTML < 5
//Necessário fazer - Verificar campos vazios

global $conn;
$conn->beginTransaction();

$idcategoria = intval($_POST['categoria']);
if($idcategoria == -1){
    $categoria = $_POST['nova-categoria'];
    try{
        $idcategoria = createCategory($categoria);
    }catch(PDOException $e){
        if(strpos($e->getMessage(), "categoria_nome")){
            $_SESSION['error_messages'][] = "Essa categoria já existe na base de dados, selecione-a da lista!";
            header('Location: ' . $_SERVER['HTTP_REFERER']);
            exit;
        }         
    }
}
$idmarca = intval($_POST['marca']);
if($idmarca == -1){
    $marca = $_POST['nova-marca'];
    try{
        $idmarca = createBrand($marca);
    }catch(PDOException $e){
        if(strpos($e->getMessage(), "marca_nome")){
            $_SESSION['error_messages'][] = "Essa marca já existe na base de dados, selecione-a da lista!";
            header('Location: ' . $_SERVER['HTTP_REFERER']);
            exit;
        }       
    }
}
$idmodelo = $_POST['modelo'];
if($idmodelo == "-1"){
    $modelo = $_POST['novo-modelo'];

    try{
        $idmodelo = createModel($modelo, $idmarca);
    }catch(PDOException $e){
        if(strpos($e->getMessage(), "modelo_nome")){
            $_SESSION['error_messages'][] = "Esse modelo da marca escolhida já existe na base de dados, selecione-o da lista!";
            header('Location: ' . $_SERVER['HTTP_REFERER']);
            exit;
        }    
    }
}
$versao = $_POST['versão'];
try{
    $idversao = createVersion($versao, $idmodelo);
}catch(PDOException $e){
    if(strpos($e->getMessage(), "versao_nome")){
        $_SESSION['error_messages'][] = "A versão desse modelo já existe na base de dados!";
        header('Location: ' . $_SERVER['HTTP_REFERER']);
        exit;
    }    
}
$idcor = intval($_POST['cor']);
if($idcor == -1){
    $cor = $_POST['nova-cor'];
    try{
        $idcor = createColor($cor);
    }catch(PDOException $e){
        if(strpos($e->getMessage(), "cor_nome")){
            $_SESSION['error_messages'][] = "Essa cor já existe na base de dados, selecione-a da lista!";
            header('Location: ' . $_SERVER['HTTP_REFERER']);
            exit;
        }       
    }
}
$nome = $_POST['nome'];
$preco = number_format($_POST['preço'], 2, '.', '');
$stock = $_POST['stock'];
$disponibilidade = 0;
if($stock > 0){
    $disponibilidade = 1;
}
$descricao = $_POST['descrição'];

if(isset($_FILES['imagem']['nome'])){
    $target_dir = $BASE_DIR . 'images/products/';
    $target_file = $target_dir . basename($_FILES["imagem"]["name"]);
    $uploadOk = 1;

    // Check if file already exists
    if (!file_exists($target_dir)) {
        mkdir($target_dir, 0777, true);
    }

    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
        // if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($_FILES["imagem"]["tmp_name"], $target_file)) {
            //echo "The file ". basename( $_FILES["imagem"]["name"]). " has been uploaded.";
        } else {
            //echo "Sorry, there was an error uploading your file.";
        }
    }
    try{
        createProduct($descricao, $disponibilidade, $nome, $preco, $stock, $idcor, $idversao, $idcategoria, $_FILES["imagem"]["name"]);
    }catch(PDOException $e){
        print $e->getMessage();    
    }
    $conn->commit();
    $_SESSION['success_messages'][] = 'Produto adicionado com sucesso';
    header('Location: ' . $_SERVER['HTTP_REFERER']);
}
else{
    try{
        createProduct($descricao, $disponibilidade, $nome, $preco, $stock, $idcor, $idversao, $idcategoria);
    }catch(PDOException $e){
        print $e->getMessage();    
    }
    $conn->commit();
    $_SESSION['success_messages'][] = 'Produto adicionado com sucesso';
    header('Location: ' . $_SERVER['HTTP_REFERER']);
}

?>
