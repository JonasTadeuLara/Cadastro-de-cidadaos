<?php

require_once 'connect.php';

require_once 'header.php';

?>
<div class="container">
	<?php

	if(isset($_POST['buscar'])){

		if( empty($_POST['nis']) ){
			echo "Por favor preencha todos os campos requeridos";
		}else{
			$nis = $_POST['nis'];
			$sql = "SELECT name FROM users WHERE nis = {$nis}";
			$result = mysqli_fetch_array($con->query($sql));
            echo "<div class='alert alert-success'>O NIS: ". $nis ." corresponde ao cidadão: ". $result['name'] ." . </div>";
		}
	}
	?>
	<div class="row">
	<div class="col-md-6 col-md-offset-3">
		<div class="box">
			<h3><i class="glyphicon glyphicon-plus"></i>&nbsp;Cadastrar cidadão</h3>
			<form action="" method="POST">
				<label for="nis">NIS</label>
				<input type="text" id="nis"  name="nis" class="form-control"><br>
				<input type="submit" name="buscar" class="btn btn-success" value="Buscar">
			</form>

		</div>
	</div>
</div>
</div>

<?php

