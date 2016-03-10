<?php
	$conn = mysqli_connect("localhost","root","Marlonbreno1", "controle");
	
	$busca = $_GET['busca'];

	if($busca != "") {
		$sql = "SELECT * FROM produto WHERE descricao LIKE '%$busca%' ORDER BY descricao ASC ";
		$query = mysqli_query($conn, $sql) or die(mysqli_error($conn));
		
		//loop para mostrar a busca
		while($row = mysqli_fetch_assoc($query)) {
			echo $row['preco'];
		}
	}
?>