





<!DOCTYPE html>
<html>
<head>
    
    <title>Saque</title>
     <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<style>
	body{
	 background-color: rgb(200,200,200);
	}
</style>
<body>

	<div class="container">
			<div class="row">
				<div class="col-md-4">
					
				</div>
				<div class="col-md-4" align="center">
					<label><h3>Valor:</h3></label>

<?php  

$agencia = "";
$conta = "";
$senha = "";
$dinheiro = 0;


if (isset($_POST["conta"]) && isset($_POST["senha"]) && isset($_POST["dinheiro"])) {
	$agencia = $_POST["agencia"];
    $conta = $_POST["conta"];
    $senha = $_POST["senha"];
    $dinheiro = $_POST["dinheiro"];
} else {
	header("Location:index.php");
}

$dinheiroinicial = $dinheiro;

for ($cont1=0;$dinheiro >= 100; $cont1++) { 
	$dinheiro = $dinheiro - 100;
}

for ($cont2=0;$dinheiro >= 50; $cont2++) { 
	$dinheiro = $dinheiro - 50;
}

for ($cont3=0;$dinheiro >= 20; $cont3++) { 
	$dinheiro = $dinheiro - 20;
}

for ($cont4=0;$dinheiro >= 10; $cont4++) { 
	$dinheiro = $dinheiro - 10;
}

for ($cont5=0;$dinheiro >= 5; $cont5++) { 
	$dinheiro = $dinheiro - 5;
}

for ($cont6=0;$dinheiro >= 1; $cont6++) { 
	$dinheiro = $dinheiro - 1;
}


echo "".$dinheiroinicial."<br>";

echo "<img src= notas/100reais.jpg width=300px>".$cont1."<br><br>";
echo "<img src= notas/50reais.jpg width=300px>".$cont2."<br><br>";
echo "<img src= notas/20reais.jpg width=300px>".$cont3."<br><br>";
echo "<img src= notas/10reais.jpg width=300px>".$cont4."<br><br>";
echo "<img src= notas/5reais.jpg width=300px>".$cont5."<br><br>";
echo "<img src= notas/1real.jpg width=300px>".$cont6."<br><br>";


?>

			    </div>
			</div>
	</div>

</body>

</html>