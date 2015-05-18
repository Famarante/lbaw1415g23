<?php

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
function createProduct($descricao, $disponibilidade, $nome, $preco, $stock, $nome_cor, $nome_versao, $nome_categoria) {
    global $conn;

    /*
     * verificar cor / versao / categoria
     */

    $resultCor = $conn->query("SELECT idcor FROM cor WHERE nome='$nome_cor'");
    $resultCor = $resultCor->fetch();

    $resultCategoria = $conn->query("SELECT idcategoria FROM categoria WHERE nome='$nome_categoria'");
    $resultCategoria = $resultCategoria->fetch();

    $resultVersao = $conn->query("SELECT idversao FROM versao WHERE nome='$nome_versao'");
    $resultVersao = $resultVersao->fetch();

    if(!isset($resultCor) || !isset($resultCategoria) || !isset($resultVersao))
        return; //error message
    else
    if(!isset($descricao) || !isset($disponibilidade) || !isset($nome) || !isset($preco) || !isset($stock))
        return; //error message
    else{
        $stmt = $conn->prepare("INSERT INTO produto (descricao, disponibilidade, nome, preco, stock, idcor, idversao, idcategoria) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
        $stmt->execute(array($descricao, $disponibilidade, $nome, $preco, $stock, $resultCor['idcor'], $resultCategoria['idcategoria'], $resultVersao['idversao']));
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
