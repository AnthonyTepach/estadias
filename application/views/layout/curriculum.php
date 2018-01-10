
<!DOCTYPE html>
<html>
<head>
	<title>Curriculum</title>
	<?php include'header/header.php'; ?>
	  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
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
  $( function() {
    $( "#datepicker1" ).datepicker({ dateFormat: 'yy-mm-dd' });
  } );
   $( function() {
    $( "#datepicker3" ).datepicker({ dateFormat: 'yy-mm-dd' });
  } );
    $( function() {
    $( "#datepicker4" ).datepicker({ dateFormat: 'yy-mm-dd' });
  } );
    $( function() {
    $( "#datepicker5" ).datepicker({ dateFormat: 'yy-mm-dd' });
  } );
    $( function() {
    $( "#datepicker6" ).datepicker({ dateFormat: 'yy-mm-dd' });
  } );
    $( function() {
    $( "#datepicker7" ).datepicker({ dateFormat: 'yy-mm-dd' });
  } );
    $( function() {
    $( "#datepicker8" ).datepicker({ dateFormat: 'yy-mm-dd' });
  } );
  </script>
</head>
<body>
	<div class="page-wrapper">
		<?php include'header/menu-alumno.php';  ?>
		
			<div class="container">
			


			
			<h1>Curriculum</h1>	
			<p class="bg-warning"><strong>Alerta</strong> NO ingreses objetivos o extractos profesionales que hayas encontrado en internet, ya que hemos registrado muchos de ellos en nuestra base de datos,<strong> serán comparados y rechazados</strong>.</p>
				<form method="post" action="C_curriculum/GuardarCV" enctype="multipart/form-data">
					<input type="text" required=""name="txtmatri" hidden value="<?php foreach($info->result() as $row) {		                        echo $row -> matricula_alumno;}	?>">
					
					<div class="row">


					<ul class="nav nav-tabs">
						<li class="active"><a data-toggle="tab" href="#me">Acerca de..</a></li>
					 	<li ><a data-toggle="tab" href="#obj">Objetivo</a></li>
					    <li><a data-toggle="tab" href="#job">Experiencia laboral</a></li>
					    <li><a data-toggle="tab" href="#escu">Formación escolar</a></li>
					   	<li><a data-toggle="tab" href="#ingles">Inglés</a></li>
					   	<li><a data-toggle="tab" href="#interes">Mis gustos</a></li>
					   	<li><a data-toggle="tab" href="#person">Habilidades personales</a></li>
					   	<li><a data-toggle="tab" href="#tecni">Habilidades Técnicas</a></li>
					  </ul>

					  <div class="tab-content">

					  	<div id="me" class="tab-pane fade in active">
					  	  <label><h3>Sube tu foto</h3> <input type="file" name="foto" required="" class="form-control"></label>	
					      <h3>Acerca de mi</h3>
					      <p><textarea name="aboutme" style="resize:vertical;" required="" class="form-control" id="encJs"></textarea></p>
					  </div>

					  <div id="obj" class="tab-pane fade">
					      <h3>Objetivo Profecional</h3>
					      <p><textarea name="obj" style="resize:vertical;" required="" class="form-control" id="encJs"></textarea></p>
					  </div>
					    
					    <div id="job" class="tab-pane fade">
					      <h3>Experiencia laboral</h3>
					      <fieldset>
					      	<legend style="font-size: 12px;">(Trabajo, Estadías, Proyectos integradores, Servicio social)</legend>
					      	<p>
						      		<div class="form-group">							
									<label>Nombre del puesto 
										<input type="text" class="form-control"  name="txttrabajo" >
									</label>
								</div>
								<div class="form-group">
									<label>Nombre de la empresa 
										<input  type="text" required="" class="form-control" name="txtempresa">
									</label>
								</div>
								<div class="form-group">
									<label>Describe brevemente lo que realizaste
										<input  type="text" required="" class="form-control" name="txtdesc1">
									</label>
								</div>
								<div class="col-xs-6">
									 <div class="form-group">
									 	<label>Fecha inicio
						                	<input type="text" required="" name="txtinicio"  class="form-control" id="datepicker">
						                </label>
						            </div>
								</div>
								<div class="col-xs-6">
									<div class="form-group">
										<label>Fecha fin
						                	<input type="text" required="" name="txtfin"  class="form-control" id="datepicker1">
						                </label>
						            </div>
								</div>
					      	</p>
					      </fieldset>
					      <fieldset>
					      	<legend style="font-size: 12px;">(Trabajo, Estadías, Proyectos integradores, Servicio social)</legend>
					      	<p>
						      		<div class="form-group">							
									<label>Nombre del puesto 
										<input type="text" class="form-control"  name="txttrabajo1" >
									</label>
								</div>
								<div class="form-group">
									<label>Nombre de la empresa 
										<input  type="text" required="" class="form-control" name="txtempresa1">
									</label>
								</div>
								<div class="form-group">
									<label>Describe brevemente lo que realizaste
										<input  type="text" required="" class="form-control" name="txtdesc2">
									</label>
								</div>
								<div class="col-xs-6">
									 <div class="form-group">
									 	<label>Fecha inicio
						                	<input type="text" required="" name="txtinicio1"  class="form-control" id="datepicker7">
						                </label>
						            </div>
								</div>
								<div class="col-xs-6">
									<div class="form-group">
										<label>Fecha fin
						                	<input type="text" required="" name="txtfin1"  class="form-control" id="datepicker8">
						                </label>
						            </div>
								</div>
					      	</p>
					      </fieldset>

					    </div>
					    <div id="escu" class="tab-pane fade">
					      <h3>Formación escolar</h3>
					      <fieldset>
					      	<legend style="font-size: 12px;">Carrera que actualmente estudias</legend>
					      	<p>
						      		<div class="form-group">							
									<label>Titulo

									 	<input type="text" required="" class="form-control" requiered name="txttitulo" >
									 </label>
								</div>
								<div class="form-group">
									<label>Nombre de la instituci&oacute;n educativa
									 	<input  type="text" required="" class="form-control" name="txtescu">
									 </label>
								</div>
								<div class="col-xs-6">
									<div class="form-group">
										 <label>Fecha inicio
							                <input type="text" name="txtinicioE" required="" class="form-control" id="datepicker3">
							             </label>
						            </div>
								</div>
								<div class="col-xs-6">
									<div class="form-group">
									 <label>Fecha fin
						                <input type="text" name="txtfinE" required="" class="form-control" id="datepicker4">
						             </label>
						            </div>
								</div>	
					      	</p>
					      </fieldset>
					      <fieldset>
					      	<legend style="font-size: 12px;">Grado de estudios anterior al actual</legend>
					      	<p>
					      		<div class="form-group">							
								<label>Titulo

								 	<input type="text" required="" class="form-control" requiered name="txttitulo1" >
								 </label>
							</div>
							<div class="form-group">
								<label>Nombre de la instituci&oacute;n educativa
								 	<input  type="text" required="" class="form-control" name="txtescu1">
								 </label>
							</div>
							<div class="col-xs-6">
								<div class="form-group">
									 <label>Fecha inicio
						                <input type="text" name="txtinicioE1" required="" class="form-control" id="datepicker5">
						             </label>
					            </div>
							</div>
							<div class="col-xs-6">
								<div class="form-group">
								 <label>Fecha fin
					                <input type="text" name="txtfinE1" required="" class="form-control" id="datepicker6">
					             </label>
					            </div>
							</div>
					      	</p>
					      </fieldset>
					    </div>

					    <div id="ingles" class="tab-pane fade">
						    <h3>Idioma (ingles)</h3>
						    	<div class="col-md-6" ng-app>
								
			  					<div class="form-group">
			  						<label>Reading <span class="pull-right" style="font-size:16px;">{{ txtread }}/10</span>
			  							<input type="range" required="" ng-model="txtread" name="tr" class="form-control" max="10" min="0">
			  						<label>
			  					</div>
			  					<div class="form-group">
			  						<label>Listening <span class="pull-right" style="font-size:16px;">{{ txtlisten }}/10</span>
			  							<input type="range" required="" ng-model="txtlisten"  name="tl" class="form-control" max="10" min="0"> 
			  						</label>			
			  					</div>
			  					<div class="form-group">
			  						<label>Speaking <span class="pull-right" style="font-size:16px;">{{ txtspeak }}/10</span>
			  							<input type="range" required="" ng-model="txtspeak" name="ts" class="form-control" max="10" min="0">
			  						</label>
			  					</div>
			  					
							</div>	
					    </div>
					    <div id="interes" class="tab-pane fade">
					    	<p>
					    		<h3>Intereses</h3>
		  						<div class="col-md-6">
		  							<div class="form-group">
		  								<ul class="list-group">
									  		<li class="list-group-item">
									  			<div class="checkbox">
										    		<label>
										      			<input type="checkbox" name="interes[]" value="Música">
										      			<i class="fa fa-music fa-2x" aria-hidden="true"></i>
										      			 M&uacute;sica
										    		</label>
									  			</div>
									  		</li>
									  		<li class="list-group-item">
									  			<div class="checkbox">
										    		<label>
										      			<input type="checkbox" name="interes[]" value="Leer">
										      			<i class="fa fa-book fa-2x" aria-hidden="true"></i>
										      			Leer
										      	    </label>
									  			</div>
									 		 </li>
											  <li class="list-group-item">
											  	<div class="checkbox">
												    <label>
												      <input type="checkbox" name="interes[]" value="Fútbol">
												      <i class="fa fa-futbol-o fa-2x" aria-hidden="true"></i>
												      F&uacute;tbol
												    </label>
											  	</div>
											  </li>
									  
										</ul>
		  							</div>
		  						</div>
		  						<div class="col-md-6">
		  							<div class="form-group">
		  								<ul class="list-group">
									  		<li class="list-group-item">
									  			<div class="checkbox">
										    		<label>
										      			<input type="checkbox" name="interes[]" value="Fotografía">
										      			<i class="fa fa-camera fa-2x" aria-hidden="true"></i>
										      			 Fotograf&iacute;a
										    		</label>
									  			</div>
									  		</li>
									  		<li class="list-group-item">
									  			<div class="checkbox">
										    		<label>
										      			<input type="checkbox" name="interes[]" value="Mascotas">
										      			<i class="fa fa-paw fa-2x" aria-hidden="true"></i>
 														 Mascotas
										      	    </label>
									  			</div>
									 		 </li>
											  <li class="list-group-item">
											  	<div class="checkbox">
												    <label>
												      <input type="checkbox" name="interes[]" value="Tecnología">
												      <i class="fa fa-laptop fa-2x" aria-hidden="true"></i>
														Tecnolog&iacute;a
												    </label>
											  	</div>
											  </li>
									  
										</ul>
		  							</div>
		  						</div>
					    	</p>
					    </div>
					    <div id="person" class="tab-pane fade">
					    	<h3>Habilidades personales</h3>
					    	<div class="col-md-3">
		  							<div class="form-group">
		  								<ul class="list-group">
									  		<li class="list-group-item">
									  			<div class="checkbox">
										    		<label>
										      			<input type="checkbox" name="person[]" value="Empatía">
										      			
										      			 Empatía
										    		</label>
									  			</div>
									  		</li>
									  		<li class="list-group-item">
									  			<div class="checkbox">
										    		<label>
										      			<input type="checkbox" name="person[]" value="Toma de deciciones">
										      			
										      			Toma de deciciones
										      	    </label>
									  			</div>
									 		 </li>
											  <li class="list-group-item">
											  	<div class="checkbox">
												    <label>
												      <input type="checkbox" name="person[]" value="Pensamiento creativo">
												      
												     Pensamiento creativo
												    </label>
											  	</div>
											  </li>
									  
										</ul>
		  							</div>
		  						</div>
		  						<div class="col-md-3">
		  							<div class="form-group">
		  								<ul class="list-group">
									  		<li class="list-group-item">
									  			<div class="checkbox">
										    		<label>
										      			<input type="checkbox" name="person[]" value="Manejo de estrés">
										      			
										      			 Manejo de estrés
										    		</label>
									  			</div>
									  		</li>
									  		<li class="list-group-item">
									  			<div class="checkbox">
										    		<label>
										      			<input type="checkbox" name="person[]" value="Manejo de problemas y confictos">
										      			
 														 Manejo de problemas y confictos
										      	    </label>
									  			</div>
									 		 </li>
											  <li class="list-group-item">
											  	<div class="checkbox">
												    <label>
												      <input type="checkbox" name="person[]" value="Pensamineto crítico">
												      
														Pensamineto crítico
												    </label>
											  	</div>
											  </li>
									  
										</ul>
		  							</div>
		  						</div>
		  						<div class="col-md-3">
		  							<div class="form-group">
		  								<ul class="list-group">
									  		<li class="list-group-item">
									  			<div class="checkbox">
										    		<label>
										      			<input type="checkbox" name="person[]" value="Relaciones interpersonales">
										      			
										      			 Relaciones interpersonales
										    		</label>
									  			</div>
									  		</li>
									  		<li class="list-group-item">
									  			<div class="checkbox">
										    		<label>
										      			<input type="checkbox" name="person[]" value="Proactivo">
										      			
 														 Proactivo
										      	    </label>
									  			</div>
									 		 </li>
											  <li class="list-group-item">
											  	<div class="checkbox">
												    <label>
												      <input type="checkbox" name="person[]" value="Comunicación asertiva">
												      
														Comunicación asertiva
												    </label>
											  	</div>
											  </li>
									  
										</ul>
		  							</div>
		  						</div>
		  						<div class="col-md-3">
		  							<div class="form-group">
		  								<ul class="list-group">
									  		<li class="list-group-item">
									  			<div class="checkbox">
										    		<label>
										      			<input type="checkbox" name="person[]" value="Trabajo en equipo">
										      			
										      			 Trabajo en equipo
										    		</label>
									  			</div>
									  		</li>
									  		<li class="list-group-item">
									  			<div class="checkbox">
										    		<label>
										      			<input type="checkbox" name="person[]" value="Liderazgo">
										      			
 														 Liderazgo
										      	    </label>
									  			</div>
									 		 </li>
											  <li class="list-group-item">
											  	<div class="checkbox">
												    <label>
												      <input type="checkbox" name="person[]" value="Confianza en sí mismo ">
												      
														Confianza en sí mismo 
												    </label>
											  	</div>
											  </li>
									  
										</ul>
		  							</div>
		  						</div>
		  						<label><strong>Cuéntanos el porqué seleccionaste esas habilidades</strong>
		  						<textarea name="txtpersonal" class="form-control" style="resize: vertical;" required=""></textarea>
		  						</label>
					    </div>
					    <div id="tecni" class="tab-pane fade">
					    	<h3>Habilidades Técnicas</h3>
					    	<div class="col-md-3">
		  							<div class="form-group">
		  								<ul class="list-group">
									  		<li class="list-group-item">
									  			<div class="checkbox">
										    		<label>
										      			<input type="checkbox" name="tecni[]" value="Word">
										      			
										      			 Word
										    		</label>
									  			</div>
									  		</li>
									  		<li class="list-group-item">
									  			<div class="checkbox">
										    		<label>
										      			<input type="checkbox" name="tecni[]" value="Excel">
										      			Excel
										      	    </label>
									  			</div>
									 		 </li>
											  <li class="list-group-item">
											  	<div class="checkbox">
												    <label>
												      <input type="checkbox" name="tecni[]" value="PowerPoint">
												      PowerPoin
												    </label>
											  	</div>
											  </li>
									  
										</ul>
		  							</div>
		  						</div>
		  						<div class="col-md-3">
		  							<div class="form-group">
		  								<ul class="list-group">
									  		<li class="list-group-item">
									  			<div class="checkbox">
										    		<label>
										      			<input type="checkbox" name="tecni[]" value="PhotoShop">
										      			PhotoShop
										    		</label>
									  			</div>
									  		</li>
									  		<li class="list-group-item">
									  			<div class="checkbox">
										    		<label>
										      			<input type="checkbox" name="tecni[]" value="Windows (Windows (7,8,10)">
										      			Windows (7,8,10)
										      	    </label>
									  			</div>
									 		 </li>
											  <li class="list-group-item">
											  	<div class="checkbox">
												    <label>
												      <input type="checkbox" name="tecni[]" value="GNU/Linux (Debian, Ubuntu, ArchLinux, etc)">
												      GNU/Linux (Debian, Ubuntu, ArchLinux, etc)
												    </label>
											  	</div>
											  </li>
									  
										</ul>
		  							</div>
		  						</div>
		  						<div class="col-md-3">
		  							<div class="form-group">
		  								<ul class="list-group">
									  		<li class="list-group-item">
									  			<div class="checkbox">
										    		<label>
										      			<input type="checkbox" name="tecni[]" value="JAVA (SE, EE, Androi)">
										      			
										      			 JAVA (SE, EE, Androi)
										    		</label>
									  			</div>
									  		</li>
									  		<li class="list-group-item">
									  			<div class="checkbox">
										    		<label>
										      			<input type="checkbox" name="tecni[]" value="C#">
										      			C#
										      	    </label>
									  			</div>
									 		 </li>
											  <li class="list-group-item">
											  	<div class="checkbox">
												    <label>
												      <input type="checkbox" name="tecni[]" value="PHP">
												       PHP
												    </label>
											  	</div>
											  </li>
									  
										</ul>
		  							</div>
		  						</div>
		  						<div class="col-md-3">
		  							<div class="form-group">
		  								<ul class="list-group">
									  		<li class="list-group-item">
									  			<div class="checkbox">
										    		<label>
										      			<input type="checkbox" name="tecni[]" value="SQL(MySQL, SQL Server, postgreSQL, etc)">
										      			SQL(MySQL, SQL Server, postgreSQL, etc)
										    		</label>
									  			</div>
									  		</li>
									  		<li class="list-group-item">
									  			<div class="checkbox">
										    		<label>
										      			<input type="checkbox" name="tecni[]" value="JavaScript">
											      		JavaScript
										      	    </label>
									  			</div>
									 		 </li>
											  <li class="list-group-item">
											  	<div class="checkbox">
												    <label>
												      <input type="checkbox" name="tecni[]" value="HTML">
												      HTML
												    </label>
											  	</div>
											  </li>
									  
										</ul>
		  							</div>
		  						</div>
		  						<label><strong>Cuéntanos en donde y porqué has usado algunos de estos programas o lenguajes de programación</strong>
		  						<textarea name="txttecnica" class="form-control" style="resize: vertical;" required=""></textarea>
		  						</label>
					    </div>
					  </div>
</div>

	
					
					<div class="row" >
						
						<div class="col-md-6">
							
						</div>			
					</div>
					<input type="submit" class="btn btn-success pull-right"   value="Guardar" /><br><br>						
				</form>
			</div><!--container-->	
		<?php include'footer/footer.php' ?>
		<?php include'footer/footer_menu.php'; ?>
	</div>
</body>
</html>