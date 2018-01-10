<!DOCTYPE html>
<html>
<head>
	<title>Agregar proyecto</title>
	<?php  include 'header/header.php'; ?>
	<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
   $.datepicker.regional['es'] = {
 closeText: 'Cerrar',
 prevText: '<--Ant',
 nextText: 'Sig-->',
 currentText: 'Hoy',
 monthNames: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
 monthNamesShort: ['Ene','Feb','Mar','Abr', 'May','Jun','Jul','Ago','Sep', 'Oct','Nov','Dic'],
 dayNames: ['Domingo', 'Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado'],
 dayNamesShort: ['Dom','Lun','Mar','Mié','Juv','Vie','Sáb'],
 dayNamesMin: ['Do','Lu','Ma','Mi','Ju','Vi','Sá'],
 weekHeader: 'Sm',
 dateFormat: 'dd/mm/yy',
 firstDay: 1,
 isRTL: false,
 showMonthAfterYear: false,
 yearSuffix: ''
 };
 $.datepicker.setDefaults($.datepicker.regional['es']);
  $( function() {
    $( "#datepicker" ).datepicker({ dateFormat: 'yy-mm-dd' });
  } );
  </script>
</head>
<body>
 <div class="page-wrapper">
 	<?php  include 'header/menu-empresa.php'; ?>
 	<div class="container">
 		<h1>Agregar proyecto</h1>
 		<div class="row">
 		<form method="post" action="C_proyecto/add_pro">
		  <div class="col-xs-12">
		  	 <div class="form-group">
			  	<input type="text" name="txtrfc"  hidden="" value="<?php foreach($info->result() as $row) { echo $row-> rfc_empresa; }?>">
			  	<label>
			  		Nombre del proyecto:
			  		<input type="text" name="txtpro" class="form-control" required="">
			  	</label>
			</div>
			<div class="form-group">
				<label>
					Objetivo
					<textarea  name="txtobj" class="form-control" required="" style="resize:vertical; text-align: justify;"></textarea>
					
				</label>
			</div>
			<div class="col-xs-6">
				<div class="form-group">
					<label>
					&Aacute;rea
					<select class="form-control" name="objArea">
						<?php foreach ($area -> result() as $row){?>
						<option value="<?php echo $row -> id_area; ?>">
							<?php echo $row -> nom_area; ?>
						</option>
						<?php }?>
					</select>
				</label>
				</div>
			</div>
			<div class="col-xs-6">
				<div class="form-group">
					<label>Fecha inicio
					    <input type="text" required="" name="txtfecha"  class="form-control" id="datepicker" required="">
					</label>
				</div>
			</div>
			<div class="form-group">
				<label>
					Lider de proyecto/Responsable
					<input type="text" name="txtlider" class="form-control" required="">
				</label>
			</div>
			
			<div class="col-xs-6">
				<div class="form-group">
					<label>Horario
					    <input type="text" required="" name="txthora"  class="form-control"  required="">
					</label>
				</div>
			</div>

		  </div><!--xs-->
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