<?php
  
    function createComment($userID, $productID, $text) {
        global $conn;
        
        $stmt = $conn->prepare("INSERT INTO comentario (data, texto, idutilizador, idproduto) VALUES (date_trunc('second', current_timestamp), ?, ?, ?)");
        $stmt->execute(array($text, $userID, $productID));
    
    }

    function removeComment($idcomment) {
        global $conn;
        
        $stmt = $conn->prepare("DELETE FROM comentario WHERE idcomentario = ?");
        $stmt->execute(array($idcomment));
        
    }

?>
