<?php 

require_once 'connect.php';

require_once 'header.php';

?>
<div class="container">
	<?php 

	if(isset($_POST['addnew'])){

		if( empty($_POST['name']) ){
			echo "Por favor preencha todos os campos requeridos"; 
		}else{		
			$name  = $_POST['name'];
			$nis = time() % 90000000000 + 10000000000;
			$sql = "INSERT INTO users(name,nis) 
		    VALUES('$name','$nis')";

			if( $con->query($sql) === TRUE){
				echo "<div class='alert alert-success'>Adcionado ".$name." com o NIS ".$nis." com sucesso! </div>";
			}else{
				echo "<div class='alert alert-danger'>Ocorreu um erro ao adcionar novo usuário. </div>";
			}
		}
	}
	?>
	<div class="row">
	<div class="col-md-6 col-md-offset-3">
		<div class="box">
			<h3><i class="glyphicon glyphicon-plus"></i>&nbsp;Cadastrar cidadão</h3>
			<form action="" method="POST">
				<label for="name">Nome</label>
				<input type="text" id="name"  name="name" class="form-control"><br>
				<input type="submit" name="addnew" class="btn btn-success" value="Cadastrar">
			</form>
		</div>
	</div>
</div>
</div>

<?php 
