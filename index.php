
<html>
<head>
	<title>pagina test 1</title>
</head>

<body>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">

	<input type="text" name="numeroA" required> <br>
	<input type="text" name="numeroB" required> <br>

	<a>sumar </a>
	<input type="checkbox" name="sumar" value="1"> <br>
	<a>restar </a>
	<input type="checkbox" name="restar" value="1"> <br>
	<a>dividir </a>
	<input type="checkbox" name="dividir" value="1"> <br>
	<a>multiplicar </a>
	<input type="checkbox" name="multiplicar" value="1"> <br>

	<input type="submit" value="Enviar"> 


</form>
<?php
	if ($_SERVER["REQUEST_METHOD"] == "POST") {

		$numeroA = $_POST['numeroA'];

		$numeroB = $_POST['numeroB'];

		// Verifica si el checkbox está marcado
		if(isset($_POST['sumar'])) {
    		// Si está marcado, ejecuta algo
    		$resultado_suma = $numeroA + $numeroB;
    		echo "El resultado de la suma es ".$resultado_suma ."<br>";

		} 

		if(isset($_POST['restar'])) {
    		// Si está marcado, ejecuta algo
    		$resultado_resta = $numeroA - $numeroB;
    		echo "El resultado de la resta es ".$resultado_resta ."<br>";
		} 

		if(isset($_POST['dividir'])) {
    		// Si está marcado, ejecuta algo
    		$resultado_dividir = $numeroA / $numeroB;
    		echo "El resultado de la resta es ".$resultado_dividir."<br>";
		} 

		if(isset($_POST['multiplicar'])) {
    		// Si está marcado, ejecuta algo
       		$resultado_multiplica = $numeroA * $numeroB;
    		echo "El resultado de la resta es ".$resultado_multiplica ."<br>";
		} 
	}
?>
</body>
</html>