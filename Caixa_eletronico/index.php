
<!DOCTYPE html>
<html>
<head>
    
    <title>Banco</title>
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

	<form action="saque.php" method="post">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					
				</div>
				<div class="col-md-4" align="center">
                    
                    <label><h3>BANCO 24 HORAS!</h3></label>

					<label><h4>Selecione sua Agência:</h4></label><br>

					<select name="agencia" class="form-control">
						<option value="1">Caixa</option>
						<option value="2">Banco do Brasil</option>
						<option value="3">Itau</option>
						<option value="4">Santander</option>
						<option value="5">Bradesco</option>
					</select>
                    
                    <label><h4>Digite sua Conta:</h4></label><br>
                    <input type="txt" name="conta" class="form-control">

                    <label><h4>Digite sua Senha:</h4></label><br>
                    <input type="password" name="senha" class="form-control">

                    <label><h4>Quantidade Dinheiro Desejado:</h4></label><br>
                    <input type="number" name="dinheiro" class="form-control"><br>                                 
					<input type="submit" class="btn btn-success" name="Sacar" value="Sacar">	
					<input type="reset"  class="btn btn-danger" name="Cancelar" value="Cancelar">

				</div>
			</div>
		</div>
	</form>
	

</body>

</html>