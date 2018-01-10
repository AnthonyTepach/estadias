<!DOCTYPE html>
<html>
<head>
	<title>Mis proyectos</title>
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
	 	<br>
	 	 <div class="w3-container w3-blue">
		  <h1>Mis proyectos</h1>
		</div> 
		<br>
	 		<?php 

				foreach($proyecto->result() as $row)
				 {
			?>
			
			<div class="col-xs-12">
				<div class="w3-container">
				  <div class="w3-card-4" style="width:100%;">
				    <header class="w3-container w3-blue">
				      <h1><?php echo $row -> nombre_proyecto;?></h1>
				    </header>

				    <div class="w3-container">
				      <p  style="text-align: justify;"><strong>Objetivo: </strong><?php echo $row -> objetivo_proyecto;?></p>
				      <p><strong>Responsable: </strong><?php echo $row -> responsable_proyecto;?></p>
				     <p><strong>Horario: </strong><?php echo $row -> horario_proyecto;?></p>
					    <button onclick="document.getElementById('id0<?php echo $row -> id_proyecto;?>').style.display='block'" class="w3-btn w3-teal  pull-right">
					    <i class="fa fa-pencil" aria-hidden="true"></i>
						</button>
						<button class="w3-btn w3-red pull-right" onclick="
                                                                var confirm = alertify.confirm('Confirmar', '¿Esta seguro que desea eliminar el proyecto?', null, null).set('labels', {ok: 'Confirmar', cancel: 'Cancelar'});

                                                                confirm.set({transition: 'slide'});

                                                                confirm.set('onok', function () { //callbak al pulsar botón positivo
                                                                    alertify.success('Eliminando');
                                                                    setTimeout(window.location = '<?php echo base_url();?>index.php/C_proyecto/elimina/<?php echo $row -> id_proyecto;?>', 10000);

                                                                });

                                                                confirm.set('oncancel', function () { //callbak al pulsar botón negativo
                                                                    alertify.error('Cancelando');
                                                                });

                                                           " >
							<i class="fa fa-trash-o" aria-hidden="true"></i>
						</button>
				     <br><br>
				     <!--EDITAR-->
				    	<div class="w3-container">
						  

						  <div id="id0<?php echo $row -> id_proyecto;?>" class="w3-modal">
						    <div class="w3-modal-content">
						      <header class="w3-container w3-blue"> 
						        <span onclick="document.getElementById('id0<?php echo $row -> id_proyecto;?>').style.display='none'" 
						        class="w3-closebtn">&times;</span>
						        <h2>Modificar</h2>
						      </header>
						      <div class="w3-container">
						        <form method="post" action="C_proyecto/modifica" name="Modify<?php echo $row -> id_proyecto;?>">
						        <br>
						        	<div class="form-group">
						        		<label>
						        			<input type="text" hidden="" name="txtidpro" value="<?php echo $row -> id_proyecto;?>">
						        			<input type="text" hidden="" name="txtproidde" value="<?php echo $row -> id_proyecto_detalle;?>">
						        			Nombre del proyecto:
						        			<input required="" type="text" name="txtupNom" value="<?php echo $row -> nombre_proyecto;?>" class="form-control">
						        		</label>
						        	</div>
						        	<div class="form-group">
						        		<label>
						        			Objetivo:
						        			<textarea name="obj" required="" class="form-control"  >
						        				<?php echo $row -> objetivo_proyecto;?>
						        			</textarea>
						        		</label>
						        	</div>
						        	<div class="form-group">
						        		<label>
						        			Responsable:
						        			<input type="text" name="txtupRes" class="form-control" value="<?php echo $row -> responsable_proyecto;?>">
						        		</label>
						        	</div>
						        	<div class="col-md-6">
						        		<div class="form-group">
						        			<label>
						        				Fecha inicio:
						        				<input type="text" id="datepicker" name="txtupFecha" class="form-control" value="<?php echo $row -> fecha_inicio;?>">
						        			</label>
						        		</div>
						        	</div>
						        	<div class="col-md-6">
						        		<div class="form-group">
						        			<label>
						        				&Aacute;rea:
						        				<select class="form-control"  name="ar">
						        					<?php 	foreach ($area -> result() as $value) { ?>
						        					<option value="<?php echo $value -> id_area;?>">
						        						
						        					<?php 
						        					echo  $value -> nom_area.'</option>';
						        					}?>
						        							
						        							
						        						
						        					
						        				</select>
						        			</label>
						        		</div>
						        	</div>
						        	<input type="submit" name="" value="Continuar.." class="w3-btn w3-blue pull-right">
						        </form>
						      </div>
						      <footer class="w3-container w3-blue">
						        <p class="pull-right">AnthonyTepach</p>
						      </footer>
						    </div>
						  </div>
						</div>
						<!--Fin EDITAR-->
	 		
				    </div>

				    <footer class="w3-container w3-blue">
				      <h5><strong>&Aacute;rea:</strong> <?php echo $row -> nom_area;?></h5>
				    </footer>
				  </div>
				</div>
				<br><br><br>
			</div>

			<?php }?>
			 
	 	</div>
	 	<?php  include 'footer/footer_menu.php'; ?>
 	<?php  include 'footer/footer.php'; ?>
	</div>
</body>
</html>