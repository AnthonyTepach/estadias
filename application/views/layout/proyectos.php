<!DOCTYPE html>
<html>
<head>
	<title>Proyectos</title>
	<?php  include 'header/header.php'; ?>
</head>
<body>
 <div class="page-wrapper">
 	<?php  include 'header/menu-alumno.php'; ?>
 	<div class="container">
 		
 		<div class="jumbotron">
		  <h1>Descripción del proyecto</h1>
		  <p>
		  	<div class="row">
			  <div class="col-sm-12 col-md-12">
			    <div class="thumbnail">
			      <img src="<?php echo base_url();?>img/bannerpro.jpg" alt="baner">
			      <div class="caption">
			        <h3>Por este medio CETIC JALISCO le informa que la empresa designada es: </h3>
			        	
			        <p>
			        <?php 
			        	foreach($proyecto->result() as $row) {
                                        echo $row -> nombre_empresa;
                                      } 
			        ?>
			        </p>
			        <h3>Área</h3>
			        <p> 
			        <?php 
			        	foreach($proyecto->result() as $row) {
                                        echo $row -> nom_area;
                                      } 
			         ?>
			        </p>
			        <h3>Proyecto</h3>
			        <p>
			        	<?php 
			        	foreach($proyecto->result() as $row) {
                                        echo $row -> nombre_proyecto;
                                      } 
			        ?>

			        <h4>Objetivo</h4>
			        	<p style="text-align: justify;">
			        		<?php 
			        	foreach($proyecto->result() as $row) {
                                        echo $row -> objetivo_proyecto;
                                      } 
			        ?>
			        	</p>

			       	<h4>Responsable</h4>
			        	<p style="text-align: justify; color: blue;	">
			        		<?php 
			        	foreach($proyecto->result() as $row) {
                                        echo $row -> responsable_proyecto;
                                      } 
			        ?>
			        	</p>
			        
			        </p>

			      </div>
			    </div>
			  </div>
			</div>
		  	
		  </p>
		  
		</div>

		
		


 	</div>
 	<?php  include 'footer/footer_menu.php'; ?>
 	<?php  include 'footer/footer.php'; ?>
 </div> 
</body>
</html>

