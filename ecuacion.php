<!DOCTYPE html>
<html>
<head>
	<title>Ecuacion</title>
	<meta charset="utf-8">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="jquery/script_ecu.js"></script>
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/stay.css">
	<link rel="shortcut icon" href="img/pizarra.jpg" type="image/x-icon">
</head>
<body>
	<center>
	<br><br><br><br><br><br><br></button><form>
		<h3>Calcular ecuación</h3>
		<table>
			<tr>
				<th><label>A</label></th>
				<th><label>B</label></th>
				<th><label>C</label></th>
				<th></th>
			</tr>
			<tr>
				<td><input id="input_A" type="text" name="num_a"><label>x<sup>2</sup></label></td>
				<td><input id="input_B" type="text" name="num_b"><label>x</label></td>
				<td><input id="input_C" type="text" name="num_c"></td>
				<td><label>= 0</label></td>
			</tr>
			<tr>
	<td colspan="4"><input id="submit" type="button" name="enviar" value="calcular"> <input id = "clear" type="button" name="Limpiar" value="Limpiar"> <a href="index.html"><input type="button" name="menu" value="Menu"></input></a></td>
			</tr>
						</table>
					</form>
					</center>
				"
	<center> 
		<br><br><br><br><br>
		<div id = "resultado">
			<!--Aqui  se muestra el resultado de la ecuación-->
		</div>
	</center><br><br><br><br><br><br><br>
	<center>
<div id="footer">
	<footer id="pie">
	Derechos reservados &copy; 2020-2021 
	</footer>
</div>
</center>
</body>
<style type="text/css">
		table, tr, td, th
		{
			border: 1px solid;
			text-align: center;
		}
		input
		{
			text-align: center;
			width: 20%;
		}
	</style>
</html>