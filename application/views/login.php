<!DOCTYPE html>
<html>
<head>
    <title>Iniciar sesión</title>
   <?php include 'layout/header/header.php' ?>
</head>
<body>
      
            
 
      <div class="page-wrapper">
   <?php  include'layout/header/header_menu.php' ?> 
    
            <div class="content">
            
                <div class="col-sm-4 col-sm-offset-4">
<div class="alert alert-warning" role="alert">Estudiantes para iniciar sesión<br>Usuario: email@dominio.com<br>Contraseña: tu matricula escolar</div>
    <h2 class="page-header center">Iniciar sesión</h2>

    <div class="box">
        <form method="post" action="<?php echo base_url().'index.php/bienvenido';?>">
            <div class="form-group">
                <input type="email" class="form-control" placeholder="E-mail" name="txtema" required="">
            </div><!-- /.form-group -->

            <div class="form-group">
                <input type="password" class="form-control" placeholder="Contraseña" name="txtpass" required="">
            </div><!-- /.form-group -->

            <button type="submit" class="btn">Ingresar</button>

        </form>
    </div><!-- /.row -->
    
</div><!-- /.col-* -->
</div>
 
        
    <?php include'layout/footer/footer.php' ?>
    <?php  include'layout/footer/footer_menu.php' ?>
</body>
</html>