<?php
    require '../../db/banco.php';
    $id = null;
		
    if(!empty($_GET['id']))
    {
        $id = $_REQUEST['id'];
    }
    
    if(null==$id)
    {
        header("Location: ../../index.php");
    }
    else 
    {
       $pdo = Banco::conectar();
       $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
       $sql = "SELECT * FROM pessoa where id = ?";
       $q = $pdo->prepare($sql);
       $q->execute(array($id));
       $data = $q->fetch(PDO::FETCH_ASSOC);
       Banco::desconectar();
    }
?>