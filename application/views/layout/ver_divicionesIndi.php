<!DOCTYPE html>
<html>
<head>
	<title>Mis proyectos</title>
	<?php  include 'header/header.php'; ?>
	
</head>
<body>
	<div class="page-wrapper">
	 	<?php  include 'header/header_menu.php'; ?>
	 	<div class="container">
	 	<br>
	 	 <div class="w3-container w3-blue">
		  <h1>Divisiones registradas de la <?php foreach($info->result() as $row){echo $row-> nombre_universidad;}	?></h1>
		</div> 
		<br>
	 		<?php 

				foreach($info->result() as $row)
				 {
			?>
			
			<div class="col-xs-12">
				<div class="w3-container">
				  <div class="w3-card-4" style="width:100%;">
				    <header class="w3-container w3-blue">
				      <h1><?php echo $row -> nom_division;?></h1>
				    </header>

				    <div class="w3-container">
				      <p  style="text-align: justify;"><strong>Carrera: </strong><?php echo $row -> nom_carrera;?></p>
				      <p><strong>Director(a): </strong><?php echo $row -> nom_director;?></p>
				     <p><strong>Responsable de estadías: </strong><?php echo $row -> nom_res_estadia;?></p>
					   <!-- <button onclick="document.getElementById('id0<?php echo $row -> id_info;?>').style.display='block'" class="w3-btn w3-teal  pull-right">
					    <i class="fa fa-pencil" aria-hidden="true"></i>
						</button>-->
						<!--<button class="w3-btn w3-red pull-right" onclick="
                                                                var confirm = alertify.confirm('Confirmar', '¿Esta seguro que desea eliminar el proyecto?', null, null).set('labels', {ok: 'Confirmar', cancel: 'Cancelar'});

                                                                confirm.set({transition: 'slide'});

                                                                confirm.set('onok', function () { //callbak al pulsar botón positivo
                                                                    alertify.success('Eliminando');
                                                                    setTimeout(window.location = '<?php// echo base_url();?>index.php/C_proyecto/elimina/<?php //echo $row -> id_proyecto;?>', 10000);

                                                                });

                                                                confirm.set('oncancel', function () { //callbak al pulsar botón negativo
                                                                    alertify.error('Cancelando');
                                                                });

                                                           " >
							<i class="fa fa-trash-o" aria-hidden="true"></i>
						</button>-->
				     <br>
				     <!--EDITAR
				    	<div class="w3-container">
						  

						  <div id="id0<?php //echo $row -> id_info;?>" class="w3-modal">
						    <div class="w3-modal-content">
						      <header class="w3-container w3-blue"> 
						        <span onclick="document.getElementById('id0<?php //echo $row -> id_info;?>').style.display='none'" 
						        class="w3-closebtn">&times;</span>
						        <h2>Modificar</h2>
						      </header>
						      <div class="w3-container">
						        <form method="post" action="C_proyecto/modifica" name="Modify<?php// echo $row -> id_info;?>">
						        <br>
						        	<div class="form-group">
						        		<label>
						        			
						        			Nombre de la división:
						        			<input required="" type="text" name="txtupNom" value="<?php //echo $row -> nom_division;?>" class="form-control">
						        		</label>
						        	</div>
						        	<div class="form-group">
						        		<label>
						        			Nombre de la carrera:
						        			<textarea name="obj" required="" class="form-control"  >
						        				<?php //echo $row -> nom_carrera;?>
						        			</textarea>
						        		</label>
						        	</div>
						        	<div class="form-group">
						        		<label>
						        			Nombre de director(a):
						        			<input type="text" name="txtupRes" class="form-control" value="<?php //echo $row -> nom_director;?>">
						        		</label>
						        	</div>
						        	<div class="col-md-6">
						        		<div class="form-group">
						        			<label>
						        				Nombre de encargado de estadías:
						        				<input type="text" id="datepicker" name="txtupFecha" class="form-control" value="<?php// echo $row -> nom_res_estadia;?>">
						        			</label>
						        		</div>
						        	</div>
						        	<div class="col-md-6">
						        		<div class="form-group">
						        			<label>
						        				
						        			Número y extención de la división_
						        				<input type="text" id="datepicker" name="txtupFecha" class="form-control" value="<?php//echo $row -> num_ext_division;?>">
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
						Fin EDITAR-->
	 		
				    </div>

				    <footer class="w3-container w3-blue">
				      <h5><strong>Número con Ext:</strong><?php echo $row -> num_ext_division;?></h5>
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