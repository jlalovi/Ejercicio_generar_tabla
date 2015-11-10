<!DOCTYPE html>
<html>
	<head>
		<title>Tabla de pares e impares</title>
	</head>
	<body>
		<h1>Prueba de creación de una tabla con PHP mediante bucles:</h1>		
		<table border="1">
			<tr style = "background:black; color:white;">
				<th>Número</th>
				<th>¿Impar o par?</th>
				<th>¿Primo?</th>
			</tr>
			<?php 
				for ($i=1; $i <= 10; $i++) {
					// Declaro una variable divisible para saber si la iteración '$i' es un número primo o no.
					$divisible=0;
					for ($k=2; $k <= $i/2 ; $k++) {
						if ($i%$k==0)
							$divisible++;
					}
					//Por cada iteración, creo una línea, coloreada si es prima:
					if ($divisible==0)
						echo "<tr style = 'background-color: red; color: white;'>"; //En esta condición, el número es primo, por lo que coloreo el fondo de la fila.
					else
						echo "<tr style = 'background-color: green; color: white;'>";
					
					for ($j=0; $j < 3 ; $j++) {
						//Compruebo en qué celda me encuentro en cada iteración de este segundo bucle:
						if ($j==0) {
							echo "<td>".$i."</td>"; //Imprimo el número correspondiente a la celda
						}
						if ($j==1) { //Condicional que imprime si es par o impar el número de la fila
							if ($i%2==0)
								echo "<td>Par</td>";
							else
								echo "<td>Impar</td>";
						}
						if ($j==2) { //Condicional que comprueba si es primo o no a través de un bucle
							if ($divisible==0)
								echo "<td>Primo</td>";
							else
								echo "<td>No</td>";
						}
					}
					echo "</tr>";
				}
			?>
		</table>		
	</body>
</html>