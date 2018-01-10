<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

<title>CV: <?php foreach($datos -> result() as $row){ echo ' '.$row-> nombre_alumno.' '.$row -> a_paterno_alumno.' '.$row -> a_materno_alumno;} ?> </title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link type="text/css" rel="stylesheet" href="<?php echo base_url();?>CV/css/blue.css" />
<link type="text/css" rel="stylesheet" href="<?php echo base_url();?>CV/css/print.css" media="print"/>
<!--[if IE 7]>
<link href="css/ie7.css" rel="stylesheet" type="text/css" />
<![endif]-->
<!--[if IE 6]>
<link href="css/ie6.css" rel="stylesheet" type="text/css" />
<![endif]-->
<script type="text/javascript" src="<?php echo base_url();?>CV/js/jquery-1.4.2.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>CV/js/jquery.tipsy.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>CV/js/cufon.yui.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>CV/js/scrollTo.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>CV/js/myriad.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>CV/js/jquery.colorbox.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>CV/js/custom.js"></script>
<script type="text/javascript">
		Cufon.replace('h1,h2');
</script>
</head>
<body>
<!-- Begin Wrapper -->
<div id="wrapper">
  <div class="wrapper-top"></div>
  <div class="wrapper-mid">
    <!-- Begin Paper -->
    <div id="paper">
      <div class="paper-top"></div>
      <div id="paper-mid">
        <div class="entry">
          <!-- Begin Image -->
          <img class="portrait" src="<?php echo base_url();?>CV/images/image.jpg" alt="<?php foreach($datos -> result() as $row){ echo ' '.$row-> nombre_alumno.' '.$row -> a_paterno_alumno.' '.$row -> a_materno_alumno;} ?>" />
          <!-- End Image -->
          <!-- Begin Personal Information -->
          <div class="self">
            <h1 class="name"><?php foreach($datos -> result() as $row){ echo ' '.$row-> nombre_alumno.' '.$row -> a_paterno_alumno.' '.$row -> a_materno_alumno;} ?> <br />
              </h1>
            <ul>
              <li class="ad"><?php foreach($datos -> result() as $row){ echo $row-> calle_alumno.', '.$row -> colonia_alumno.', '.$row-> cp_alumno.', '.$row -> municipio_alumno.', '.$row -> estado_alumno; } ?></li><br><br>
              <li class="mail"><?php foreach($datos -> result() as $row){ echo $row-> email_alumno; } ?></li>
              <li class="tel"><?php foreach($datos -> result() as $row){ echo $row-> tel_cel_alumno; } ?></li>
            </ul>
          </div>
          <!-- End Personal Information -->
          <!-- Begin Social -->
          
          <!-- End Social -->
        </div>
        <!-- Begin 1st Row -->
        <div class="entry">
          <h2>ACERCA DE MI</h2>
          <p>
            <?php foreach($datos -> result() as $row){ ?>
                  <?php echo $row-> acerca_de_mi;?></li>
                <?php }?>
          </p>
        </div>
        <div class="entry">
          <h2>OBJETIVO PROFESIONAL</h2>
          <p>
          <?php foreach($datos -> result() as $row){ ?>
                  <?php echo $row-> objetivo_personal;?></li>
                <?php }?></p>
        </div>
        <!-- End 1st Row -->
        <!-- Begin 2nd Row -->
        <div class="entry">
          <h2>EDUCACION</h2>
          <?php foreach($es -> result() as $row){ ?>
          <div class="content">
            <h3><?php echo $row-> fecha_inicio;  ?> &mdash; <?php echo $row-> fecha_fin;  ?></h3>
            <p><?php echo $row-> nom_escuela;  ?> <br />
              <em><?php echo $row-> nom_carrera;  ?></em></p>
          </div>
          <?php }?>
        </div>
        <!-- End 2nd Row -->
        <!-- Begin 3rd Row -->
        <div class="entry">
          <h2>EXPERIENCIA</h2>
          <?php foreach($la -> result() as $row){ ?>
          <div class="content">
            <h3><?php echo $row-> fecha_inicio;  ?> &mdash; <?php echo $row-> fecha_fin;  ?></h3>
            <p><?php echo $row-> nom_empresa;  ?><br />
              <em><?php echo $row-> nom_puesto;  ?></em></p>
            <ul class="info">
              <li><?php echo $row-> desc_trabajo;  ?></li>
              
            </ul>
          </div>
          <?php }?>
         
        <!-- End 3rd Row -->
        <div class="entry">
          <h2>PASATIEMPOS</h2>
          <div class="content">
            <ul class="skills">
              <?php foreach($intereses -> result() as $row){ ?>
                  <li class=""><?php echo $row-> intereses;?></li>
                <?php }?>
            </ul>
          </div>
        </div>
        <!-- Begin 4th Row -->
        <div class="entry">
          <h2>HABILIDADES</h2>
          <div class="content">
            <h3>TÉCNICAS</h3>
            <ul class="skills">
             <?php foreach($hate->result() as $row){?>
                <li><?php echo $row -> habilidad_tecnica?></li>
             <?php }?>
            </ul>
            <h3>JUSTIFICACIÓN</h3>
            <P>
              <?php foreach($datos -> result() as $row){ echo $row -> justificacion_tecnica;} ?>
            </P>
          </div>
          <div class="content">
            <h3>PERSONALES</h3>
            <ul class="skills">
             <?php foreach($hape->result() as $row){?>
                <li><?php echo $row -> habilidad_personal?></li>
             <?php }?>
            </ul>
            <h3>JUSTIFICACIÓN</h3>
            <P>
              <?php foreach($datos -> result() as $row){ echo $row -> justificacion_personal;} ?>
            </P>
          </div>
        </div>
        <!-- End 4th Row -->
         <!-- Begin 5th Row -->
        <div class="entry">
        <h2>IDIOMA</h2>
        	<div class="content">
            <ul class="skills">
              <li>Speak: <div class="progress">
                  <div class="progress-bar" role="progressbar" aria-valuenow="<?php foreach($datos -> result() as $row){echo $row-> speaking.'0';} ?>" aria-valuemin="0" aria-valuemax="100" style="min-width: 2em; width: <?php foreach($datos -> result() as $row){echo $row-> speaking.'0%';} ?>">
                    <?php foreach($datos -> result() as $row){echo $row-> speaking.'0%';} ?>
                  </div>
                </div></li>
              <li>Reading: <div class="progress">
                  <div class="progress-bar" role="progressbar" aria-valuenow="<?php foreach($datos -> result() as $row){echo $row-> reading.'0';} ?>" aria-valuemin="0" aria-valuemax="100" style="min-width: 2em; width: <?php foreach($datos -> result() as $row){echo $row-> reading.'0%';} ?>">
                    <?php foreach($datos -> result() as $row){echo $row-> reading.'0%';} ?>
                  </div>
                </div></li>
              <li>Listen:<div class="progress">
                  <div class="progress-bar" role="progressbar" aria-valuenow="<?php foreach($datos -> result() as $row){echo $row-> listening.'0';} ?>" aria-valuemin="0" aria-valuemax="100" style="min-width: 2em; width: <?php foreach($datos -> result() as $row){echo $row-> listening.'0%';} ?>">
                    <?php foreach($datos -> result() as $row){echo $row-> listening.'0%';} ?>
                  </div>
                </div></li>
            </ul>
        </div>
        <!-- Begin 5th Row -->
      </div>
      <
      
    </div>
    <!-- End Paper -->
    <div class="paper-bottom"></div>
  </div>
  <div class="wrapper-bottom"></div>
</div>
<div id="message"><a href="#top" id="top-link">Go to Top</a></div>
<!-- End Wrapper -->
</body>
</html>
  