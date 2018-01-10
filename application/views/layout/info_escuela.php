<!DOCTYPE html>
<html>
<head>
	<title>Agregar proyecto</title>
	<?php  include 'header/header.php'; ?>
	

</head>
<body>
 <div class="page-wrapper">
 	<?php  include 'header/menu-universidad.php'; ?>
 	<div class="container">
 		<h1>Agregar las áreas o divisiones de la universidad</h1>
 		<div class="row">
 		<form method="post" action="add_div">
		  <div class="col-xs-12">
		  <input  type="text" name="txtid" required="" hidden="" value="<?php foreach ($info-> result() as $key) {echo $key -> id_universidad;}?>" > 
		  	 <div class="form-group">
			  	
			  	<label>
			  	Nombre de la división
			  			  		<input type="text" name="txtdiv" class="form-control" required="">
			  	</label>
			</div>
			<div class="form-group">
				<label>
					Carrera
					<input type="text" name="txtcar" class="form-control" required="">
					
				</label>
			</div>
			
			<div class="form-group">
				<label>
					Nombre del director(a) de la división
					<input type="text" name="txtdir" class="form-control" required="">
				</label>
			</div>
			
			<div class="form-group">
				<label>
					Nombre de responsable de estadías de la división
					<input type="text" name="txtes" class="form-control" required="">
				</label>
			</div>

									

		  </div><!--xs-->
		  <div class="col-xs-6">
				<div class="form-group">
					<label>
						Número y extención de la división
						<input type="text" name="txtnum" class="form-control" required="">
					</label>
				</div>
			</div>
		  <input type="submit" class="btn btn-success pull-right"   value="Guardar" />

		  </form>
		</div>
		<br>
 	</div>
 	<?php  include 'footer/footer_menu.php'; ?>
 	<?php  include 'footer/footer.php'; ?>
 </div>
</body>
</html>