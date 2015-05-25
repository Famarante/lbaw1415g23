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
        $stmt = $conn->prepare("INSERT INTO produto (descricao, disponibilidade, nome, preco, stock, idcor, idversao, idcategoria, imagem) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
        $stmt->execute(array($descricao, $disponibilidade, $nome, $preco, $stock, $id_cor, $id_versao, $id_categoria, "sem_foto.jpg"));
    }
    else{
        $stmt = $conn->prepare("INSERT INTO produto (descricao, disponibilidade, nome, preco, stock, idcor, idversao, idcategoria, imagem) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
        $stmt->execute(array($descricao, $disponibilidade, $nome, $preco, $stock, $id_cor, $id_versao, $id_categoria, $imagem));
    }
}

/**
 * Obter produtos por pagina
 *
 * @param $pagina
 */
function getProductsByPage($pagina, $limite){
    global $conn;

    $result = $conn->prepare("SELECT produto.idproduto, produto.nome, produto.descricao, produto.stock, produto.preco, categoria.nome AS categoria_nome, versao.nome AS versao_nome, modelo.nome AS modelo_nome, cor.nome AS cor_nome, marca.nome AS marca_nome FROM produto JOIN categoria ON produto.idcategoria = categoria.idcategoria JOIN versao ON produto.idversao = versao.idversao JOIN modelo ON modelo.idmodelo = versao.idmodelo JOIN marca ON modelo.idmarca = marca.idmarca JOIN cor ON produto.idcor = cor.idcor ORDER BY produto.idproduto OFFSET ? LIMIT ?");
    $result->execute(array($limite*$pagina - $limite, $limite));
    $result = $result->fetchAll();

    return $result;
}

/**
 * Obter produto por id
 *
 * @param $id
 */
function getProductByID($id){
    global $conn;

    $result = $conn->prepare("SELECT produto.idproduto, produto.nome, produto.descricao, produto.stock, produto.preco, produto.imagem, produto.idcategoria, produto.disponibilidade, produto.idversao, categoria.nome AS categoria_nome, versao.nome AS versao_nome, modelo.nome AS modelo_nome, modelo.idmodelo, marca.idmarca, cor.idcor, cor.nome AS cor_nome, marca.nome AS marca_nome FROM produto JOIN categoria ON produto.idcategoria = categoria.idcategoria JOIN versao ON produto.idversao = versao.idversao JOIN modelo ON modelo.idmodelo = versao.idmodelo JOIN marca ON modelo.idmarca = marca.idmarca JOIN cor ON produto.idcor = cor.idcor WHERE idproduto=?");
    $result->execute(array($id));
    return $result->fetch();

}



/**
 * Alterar a disponibilidade de um produto
 *
 * @param $id
 * @param $disponibilidade
 */
function changeDisponibilidade($idproduto, $disponibilidade){
    global $conn;

    $stmt = $conn->prepare("UPDATE produto SET disponibilidade=? WHERE idproduto=?");
    $stmt->execute(array($disponibilidade, $idproduto));
}

/**
 * Aterar o nome de um produto
 *
 * @param $idproduto
 * @param $nome
 */
function changeNome($idproduto, $nome){
    global $conn;

    $stmt = $conn->prepare("UPDATE produto SET nome=? WHERE idproduto=?");
    $stmt->execute(array($nome, $idproduto));
}

/**
 * Aterar a descrição de um produto
 *
 * @param $idproduto
 * @param $descricao
 */
function changeDescricao($idproduto, $descricao){
    global $conn;

    $stmt = $conn->prepare("UPDATE produto SET descricao=? WHERE idproduto=?");
    $stmt->execute(array($descricao, $idproduto));
}

/**
 * Alterar preço de um produto
 *
 * @param $idproduto
 * @param $preco
 */
function changePreco($idproduto, $preco){
    global $conn;

    $stmt = $conn->prepare("UPDATE produto SET preco=? WHERE idproduto=?");
    $stmt->execute(array($preco, $idproduto));
}

/**
 * Colocar stock de um produto
 *
 * @param $idproduto
 * @param $stock
 */
function changeStock($idproduto, $stock){
    global $conn;

    if(intval($stock) == 0){
        changeDisponibilidade($idproduto, 0);
    }
    else{
        changeDisponibilidade($idproduto, 1);
    }
    $stmt = $conn->prepare("UPDATE produto SET stock=? WHERE idproduto=?");
    $stmt->execute(array($stock, $idproduto));
}

/**
 * Alterar imagem de um produto
 *
 * @param $idproduto
 * @param $imagem
 */
function changeImagem($idproduto, $imagem){
    global $conn;

    $stmt = $conn->prepare("UPDATE produto SET imagem=? WHERE idproduto=?");
    $stmt->execute(array($imagem, $idproduto));
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
            $stmt = $conn->prepare("UPDATE produto SET stock=? WHERE idproduto='$id'");
            $stmt->execute(array($newStock));
        }
        else
            return; //error message
    }
}

/**
 * Alterar a categoria de um produto
 *
 * @param $idproduto
 * @param $idcategoria
 */
function changeCategoria($idproduto, $idcategoria){
    global $conn;

    $stmt = $conn->prepare("UPDATE produto SET idcategoria=? WHERE idproduto=?");
    $stmt->execute(array($idcategoria, $idproduto));
}

/**
 * Alterar a versao de um produto
 *
 * @param $idproduto
 * @param $idversao
 */
function changeVersao($idproduto, $idversao){
    global $conn;

    $stmt = $conn->prepare("UPDATE produto SET idversao=? WHERE idproduto=?");
    $stmt->execute(array($idversao, $idproduto));
}

/**
 * Alterar a cor de um produto
 *
 * @param $idproduto
 * @param $idcor
 */
function changeCor($idproduto, $idcor){
    global $conn;
    
    $stmt = $conn->prepare("UPDATE produto SET idcor=? WHERE idproduto=?");
    $stmt->execute(array($idcor, $idproduto));
}

/**
 * Alterar a cor de um produto
 *
 * @param $idproduto
 * @param $idcor
 */
function removeProduto($idproduto){
    global $conn;
    
    $stmt = $conn->prepare("DELETE FROM produto WHERE idproduto = ?");
    $stmt->execute(array($idproduto));
}


?>
