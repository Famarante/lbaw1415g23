<?php

/**
 * Criar categoria
 *
 * @param $nome_categoria
 *
 */
function createCategory($nome_categoria) {
    global $conn;

    $stmt = $conn->prepare("INSERT INTO categoria (nome) VALUES (?)");
    $stmt->execute(array($nome_categoria));
    
    $resultCategoria = $conn->prepare("SELECT idcategoria FROM categoria WHERE nome=?");
    $resultCategoria->execute(array($nome_categoria));
    $resultCategoria = $resultCategoria->fetch();
    
    return $resultCategoria['idcategoria'];

}

/**
 * Criar marca
 *
 * @param $nome_marca
 *
 */
function createBrand($nome_marca) {
    global $conn;

    $stmt = $conn->prepare("INSERT INTO marca (nome) VALUES (?)");
    $stmt->execute(array($nome_marca));
    
    $resultMarca = $conn->prepare("SELECT idmarca FROM marca WHERE nome=?");
    $resultMarca->execute(array($nome_marca));
    $resultMarca = $resultMarca->fetch();
    
    return $resultMarca['idmarca'];

}

/**
 * Criar modelo
 *
 * @param $nome_modelo
 * @param $id_marca
 *
 */
function createModel($nome_modelo, $id_marca) {
    global $conn;

    $stmt = $conn->prepare("INSERT INTO modelo (nome, idmarca) VALUES (?, ?)");
    $stmt->execute(array($nome_modelo, $id_marca));
    
    $resultModelo = $conn->prepare("SELECT idmodelo FROM modelo WHERE nome=? AND idmarca=?");
    $resultModelo->execute(array($nome_modelo, $id_marca));
    $resultModelo = $resultModelo->fetch();
    
    return $resultModelo['idmodelo'];

}

/**
 * Criar versão
 *
 * @param $nome_versao
 * @param $id_modelo
 * @param $id_marca
 *
 */
function createVersion($nome_versao, $id_modelo) {
    global $conn;

    $stmt = $conn->prepare("INSERT INTO versao (nome, idmodelo) VALUES (?, ?)");
    $stmt->execute(array($nome_versao, $id_modelo));
    
    $resultVersao = $conn->prepare("SELECT idversao FROM versao WHERE nome=? AND idmodelo=?");
    $resultVersao->execute(array($nome_versao, $id_modelo));
    $resultVersao = $resultVersao->fetch();
    
    return $resultVersao['idversao'];

}

/**
 * Criar cor
 *
 * @param $nome_cor
 *
 */
function createColor($nome_cor) {
    global $conn;

    $stmt = $conn->prepare("INSERT INTO cor (nome) VALUES (?)");
    $stmt->execute(array($nome_cor));
    
    $resultCor = $conn->prepare("SELECT idcor FROM cor WHERE nome=?");
    $resultCor->execute(array($nome_cor));
    $resultCor = $resultCor->fetch();
    
    return $resultCor['idcor'];

}

/**
 * Criar produto com os parametros obrigatórios
 *
 * @param $descricao
 * @param $disponibilidade
 * @param $nome
 * @param $preco
 * @param $stock
 * @param $nome_cor
 * @param $nome_versao
 * @param $nome_categoria
 *
 */
function createProduct($descricao, $disponibilidade, $nome, $preco, $stock, $id_cor, $id_versao, $id_categoria, $imagem = NULL) {
    global $conn;

    if($imagem == NULL){
        $stmt = $conn->prepare("INSERT INTO produto (descricao, disponibilidade, nome, preco, stock, idcor, idversao, idcategoria) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
        $stmt->execute(array($descricao, $disponibilidade, $nome, $preco, $stock, $id_cor, $id_versao, $id_categoria));
    }
    else{
        $stmt = $conn->prepare("INSERT INTO produto (descricao, disponibilidade, nome, preco, stock, idcor, idversao, idcategoria, imagem) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
        $stmt->execute(array($descricao, $disponibilidade, $nome, $preco, $stock, $id_cor, $id_versao, $id_categoria, $imagem));
    }
}

/**
 * Obter produto por id ou por nome
 *
 * @param $id
 * @param $nome
 */
function getProduct($id, $nome){
    global $conn;

    if(isset($id)){
        $result = $conn->query("SELECT * FROM produto WHERE idproduto='$id'");
        return $result->fetch();
    }
    else
        if(isset($nome)){
            $result = $conn->query("SELECT * FROM produto WHERE nome='$nome'");
            return $result->fetch();
        }
    else
        return array();
}

/**
 * Alterar a disponibilidade de um produto
 *
 * @param $id
 * @param $disponibilidade
 */
function changeDisponibilidade($id, $disponibilidade){
    global $conn;

    if(!isset($id) || !isset($disponibilidade)){
        return;//error message
    }
    else{
        $stmt = $conn->prepare("UPDATE produto SET disponibilidade: ? WHERE idproduto='$id'");
        $stmt->execute(array($disponibilidade));
    }
}

/**
 * Aterar a informação de um produto
 *
 * @param $id
 * @param $nome
 * @param $descricao
 */
function changeInfo($id, $nome, $descricao){
    global $conn;

    if(!isset($id) || !isset($nome) || !isset($descricao)){
        return; //error message
    }
    else
        if(isset($nome) && isset($descricao)){
            $stmt = $conn->prepare("UPDATE produto SET descricao: ?, nome: ? WHERE idproduto='$id'");
            $stmt->execute(array($descricao,$nome));
        }
    else
        if(!isset($nome) && isset($descricao)){
            $stmt = $conn->prepare("UPDATE produto SET descricao: ?WHERE idproduto='$id'");
            $stmt->execute(array($descricao));
        }
    else
        if(isset($nome) && !isset($descricao)){
            $stmt = $conn->prepare("UPDATE produto SET nome: ? WHERE idproduto='$id'");
            $stmt->execute(array($nome));
        }
}

/**
 * Alterar preço de um produto
 *
 * @param $id
 * @param $preco
 */
function changePreco($id, $preco){
    global $conn;

    if(!isset($id) || !isset($preco)){
        return;//error message
    }
    else{
        $stmt = $conn->prepare("UPDATE produto SET preco: ? WHERE idproduto='$id'");
        $stmt->execute(array($preco));
    }
}

/**
 * Colocar stock de um produto
 *
 * @param $id
 * @param $stock
 */
function setStock($id, $stock){
    global $conn;

    if(!isset($id) || !isset($stock)){
        return;//error message
    }
    else{
        $stmt = $conn->prepare("UPDATE produto SET stock: ? WHERE idproduto='$id'");
        $stmt->execute(array($stock));
    }
}

/**
 * Decrementa em uma unidade o stock de um produto
 *
 * @param $id
 */
function decrementStock($id){
    global $conn;

    if(!isset($id)){
        return;//error message
    }
    else{

        $result = $conn->query("SELECT stock FROM produto WHERE idproduto='$id'");
        $result = $result->fetch();

        if(isset($result) && $result[stock] > 0){
            $newStock = $result[stock] - 1;
            $stmt = $conn->prepare("UPDATE produto SET stock: ? WHERE idproduto='$id'");
            $stmt->execute(array($newStock));
        }
        else
            return; //error message
    }
}

/**
 * Alterar a categoria de um produto
 *
 * @param $id
 * @param $nome_categoria
 */
function changeCategoria($id, $nome_categoria){
    global $conn;

    if(!isset($id) || !isset($nome_categoria)){
        return;//error message
    }
    else{

        $result = $conn->query("SELECT idcategoria FROM categoria WHERE nome='$nome_categoria'");
        $result = $result->fetch();

        if(isset($resultCategoria)){
            $stmt = $conn->prepare("UPDATE produto SET idcategoria: ? WHERE idproduto='$id'");
            $stmt->execute(array($result[idcategoria]));
        }
        else
            return; //error message
    }
}

/**
 * Alterar a versao de um produto
 *
 * @param $id
 * @param $nome_versao
 */
function changeVersao($id, $nome_versao){
    global $conn;

    if(!isset($id) || !isset($nome_versao)){
        return;//error message
    }
    else{

        $result = $conn->query("SELECT idversao FROM versao WHERE nome='$nome_versao'");
        $result = $result->fetch();

        if(isset($result)){
            $stmt = $conn->prepare("UPDATE produto SET idversao: ? WHERE idproduto='$id'");
            $stmt->execute(array($result[idversao]));
        }
        else
            return; //error message
    }
}

/**
 * Alterar a cor de um produto
 *
 * @param $id
 * @param $nome_cor
 */
function changeCor($id, $nome_cor){
    global $conn;

    if(!isset($id) || !isset($nome_cor)){
        return;//error message
    }
    else{

        $result = $conn->query("SELECT idcor FROM cor WHERE nome='$nome_cor'");
        $result = $result->fetch();

        if(isset($resultCategoria)){
            $stmt = $conn->prepare("UPDATE produto SET idcor: ? WHERE idproduto='$id'");
            $stmt->execute(array($result[idcor]));
        }
        else
            return; //error message
    }
}

?>
