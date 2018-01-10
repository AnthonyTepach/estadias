<!DOCTYPE html>
<html>
<head>
	<title>Bienvenido <?php echo $tipo; ?></title>
    <?php include'layout/header/header.php';?>
</head>
<div class="page-wrapper">

        <!--
            cuerpo
        -->
        <?php 
        if ($tipo=='Alumno') {
            include 'layout/header/menu-alumno.php';
            include 'layout/pages/acerca_alumno.php';
        }elseif ($tipo=='Empresa') {
           include 'layout/header/menu-empresa.php';
           include 'layout/pages/acerca_empresa.php';
        }elseif ($tipo=='Universidad') {
            include 'layout/header/menu-universidad.php';
            include 'layout/pages/acerca_universidad.php';
        }elseif($tipo=='Administrador'){

        }else {
            include 'layout/header/header-menu.php';
            include 'layout/pages/404.php';
        }
       ?>

      
       


        <?php include'layout/footer/footer.php';?>
        <?php include'layout/footer/footer_menu.php';?>  
	</div>

</body>
</html>