<!DOCTYPE html>
<html>
<head>
	<title>Registro <?php echo $name?></title>
	 <?php include 'layout/header/header.php' ?>
</head>
<body>
	 <div class="page-wrapper">
  		 <?php  include'layout/header/header_menu.php' ?> 

            <div class="main" >
                <div class="container">
                
                	<?php 
                		if ($name=='alumno') {
                			echo "<h1>";
                			echo "Registro de ";
                			echo $name;
                			echo "</h1>";
                			include 'layout/forms/formalumno.php';
                		}elseif ($name=='universidad') {
                			echo "<h1>";
                			echo "Registro de ";
                			echo $name;
                			echo "</h1>";
                            include 'layout/forms/form_universidad.php';
                		}elseif ($name=='empresa') {
                			echo "<h1>";
                			echo "Registro de ";
                			echo $name;
                			echo "</h1>";
                            include 'layout/forms/form_empresa.php';
                		}
                		else{
                			include 'layout/pages/404.php';
                		}
                	?>
                </div>
            </div>

	        <?php include'layout/footer/footer.php' ?>
        	<?php  include'layout/footer/footer_menu.php' ?>
      </div>
</body>
</html>