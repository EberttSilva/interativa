<?php 
switch ($_REQUEST["acao"]) {
	case 'cadastrar':
		$fabricante = $_POST['fabricante'];
		$produto = $_POST['produto'];
		$categoria = $_POST['categoria'];
		
		
		$sql = "INSERT INTO produtos_interativa (fabricante, produto, categoria) VALUES ('{$fabricante}', '{$produto}', '{$categoria}')";

		$res = $conn->query($sql);

	
		break;
	
	case 'editar':
		// code...
		break;

	case 'excluir':
		// code...
		break;
		
	default:
		// code...
		break;
}