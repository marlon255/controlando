<?php
	$conn = mysqli_connect("localhost","root","Marlonbreno1", "controle");
	
	$busca = $_GET['busca'];

	if($busca != "") {
		$sql = "SELECT * FROM produto WHERE descricao LIKE '%$busca%' ORDER BY descricao ASC ";
		$query = mysqli_query($conn, $sql) or die(mysqli_error($conn));
		
		//variavel para zebrar as linhas
		$cont = 0;
		while($row = mysqli_fetch_object($query)) {
			//faz a diferenciação das cores para as linhas dos resultados
			if($cont %2 ==0) {
				$cor = "#EDEDED";
			} else {
				$cor = "#FFFFFF";
			}
			echo "<div style='background:$cor'>";
			echo $row->id. " - ";
			echo $row->descricao."<br>";
			echo "</div>";
			$cont ++;
		}
	}
?>