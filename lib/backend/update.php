<?php 
	require '../../db/banco.php';

	$id = null;

	if (!empty($_GET['id'])) 
	{
		$id = $_REQUEST['id'];
	}
	
	if (null==$id) 
	{
		header("Location: ../../index.php");
	}
	
	if (!empty($_POST)) 
	{
	
		$nomeErro = null;
		$enderecoErro = null;
		$telefoneErro = null;
		$emailErro = null;
		$sexoErro = null;
		
		$nome = $_POST['nome'];
		$endereco = $_POST['endereco'];
		$telefone = $_POST['telefone'];
		$email = $_POST['email'];
		$sexo = $_POST['sexo'];
		
		//Validação
		$validacao = true;
		if (empty($nome)) 
		{
			$nomeErro = 'Por favor digite o nome!';
			$validacao = false;
		}
		
		if (empty($email)) 
		{
			$emailErro = 'Por favor digite o email!';
			$validacao = false;
		} 
		else if ( !filter_var($email,FILTER_VALIDATE_EMAIL) ) 
		{
			$emailErro = 'Por favor digite um email válido!';
			$validacao = false;
		}
		
		if (empty($endereco)) 
		{
			$endereco = 'Por favor digite o endereço!';
			$validacao = false;
		}
		
		if (empty($telefone)) 
		{
			$telefone = 'Por favor digite o telefone!';
			$validacao = false;
		}
		
		if (empty($endereco)) 
		{
			$endereco = 'Por favor preenche o campo!';
			$validacao = false;
		}
		
		// update data
		if ($validacao) 
		{
			$pdo = Banco::conectar();
			$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$sql = "UPDATE pessoa  set nome = ?, endereco = ?, telefone = ?, email = ?, sexo = ? WHERE id = ?";
			$q = $pdo->prepare($sql);
			$q->execute(array($nome,$endereco,$telefone,$email,$sexo,$id));
			Banco::desconectar();
			header("Location: ../../index.php");
		}
	}	 
        else 
            {
                $pdo = Banco::conectar();
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$sql = "SELECT * FROM pessoa where id = ?";
		$q = $pdo->prepare($sql);
		$q->execute(array($id));
		$data = $q->fetch(PDO::FETCH_ASSOC);
		$nome = $data['nome'];
                $endereco = $data['endereco'];
                $telefone = $data['telefone'];
		$email = $data['email'];
		$sexo = $data['sexo'];
		Banco::desconectar();
	}
?>
