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
 		<h1 class="page-header">Estudiantes postulados</h1>
                                    <div class="table-responsive">
                                        <table class="table ">
                                            <tr class="w3-blue">
                                            <?php $con=1;?>
                                                <td>N°</td>
                                                <td>
                                                    <h5>Matricula</h5></td>
                                                <td>
                                                    <h5>Nombre completo</h5></td>
                                                <td>
                                                    <h5>Carrera</h5></td>
                                                <td>
                                                    <h5>Universidad</h5></td>
                                                <td>
                                                    <h5>Teléfono</h5></td>
                                                <td>
                                                    <h5>Email</h5></td>
                                                
                                                
                                            </tr>
                                            <tbody>
                                                <?php foreach($info -> result() as $row){?>
                                                    
                                                    <tr>
                                                        <td><?php echo $con++;?></td>
                                                        <td>
                                                            <?php echo $row -> matricula_alumno;?>
                                                        </td>
                                                        <td>
                                                            <?php echo $row -> Nom_completo;?>
                                                        </td>
                                                        <td>
                                                            <?php echo $row -> carrera;?>
                                                        </td>
                                                        <td>
                                                            <?php echo $row -> nombre_universidad;?>
                                                        </td>
                                                        <td>
                                                            <?php echo $row -> tel_cel_alumno;?>
                                                        </td>
                                                        <td>
                                                            <?php echo $row -> email_alumno;?>
                                                        </td>
                                                        
                                                       
                                                    </tr>
                                                    <?php } ?>
                                            </tbody>
                                        </table>
                                    </div>
 	</div>
 	<?php  include 'footer/footer_menu.php'; ?>
 	<?php  include 'footer/footer.php'; ?>
 </div>
</body>
</html>