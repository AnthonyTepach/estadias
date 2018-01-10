<!DOCTYPE html>
<html>
<head>
	<title>Mi exámen</title>
	<?php  include 'header/header.php'; ?>
</head>
<body>
 <div class="page-wrapper">
 	<?php include 'header/menu-alumno.php'; ?>
 	<div class="container">
 		
 		<div class="jumbotron">
		  <h1>Exámen/Caso practico</h1>
		  <?php 
		  $texto=null;
		  	foreach($exam-> result() as $row){ 
		  		$texto=$row -> nombre_examen;
		  	}
		  if ($texto==null || $texto==""){ ?>
		  	<h2>Aún no ienes asignado un exámen</h2>
		  <?php } else{?>
		  <p>
		  	<iframe src="http://cetic.estadiasyestancias.org/examenes/<?php foreach($exam-> result() as $row){echo $row -> nombre_examen;}?>" width='100%' height="500"></iframe>
		  	<div class="row">
		  	<?php
		  		$si=null;
		  		foreach ($echo -> result() as $row) {
		  			$si=$row-> matricula_alumno;
		  		}
		  	 if($si==null || $si==""){?>
		  	 	
                <?=form_open_multipart(base_url()."index.php/C_examen/do_zip")?>
                                    <p>NOTA(*): El nombre del documento debe contener la siguente estructura <strong>EX_Nombre.zip<br>Ejemplo: Ex_AnthonyTepach.zip</strong></p>
                                    <input type="text" name="txtmatricula" hidden=""  value="<?php foreach($info-> result() as $row){echo $row -> matricula_alumno;}?>">
                                    <input class="form_control" type="file" name="userfile" /><br>
                                    <input type="submit" class="btn" value="Subir" />
                <?=form_close()?>
               <?php } else{?>
               <h2>Gracias por enviarnos tu práctica</h2>
               <?php }?>
			</div>
		  	
		  </p>
		  <?php }?>
		</div>

		
		


 	</div>
 	<?php  include 'footer/footer_menu.php'; ?>
 	<?php  include 'footer/footer.php'; ?>
 </div> 
</body>
</html>

