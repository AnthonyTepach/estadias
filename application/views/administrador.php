<!DOCTYPE html>
<html>

<head>
    <title>Administrador:
        <?php echo $nombre?>
    </title>
    <?php include 'layout/header/header.php';?>
   <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/realsite-admin.js"></script>
   <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/realsite-admin.css">
     <style>

           
            
            #calendar {
                max-width: 900px;
                margin: 0 auto;
            }
            .error {
                color: #ac2925;
                margin-bottom: 15px;
            }
            .event-tooltip {
                width:150px;
                background: rgba(0, 0, 0, 0.85);
                color:#FFF;
                padding:10px;
                position:absolute;
                z-index:10001;
                -webkit-border-radius: 4px;
                -moz-border-radius: 4px;
                border-radius: 4px;
                cursor: pointer;
                font-size: 11px;

            }
            .modal-header
            {
                background-color: #3A87AD;
                color: #fff;
            }
        </style>

</head>

<body class="open hide-secondary-sidebar
">
    <div class="admin-wrapper">
        <?php include 'layout/header/menu_admin.php';?>
            <div class="admin-content">
                <div class="admin-content-inner">
                    <div class="admin-content-header">
                        <div class="admin-content-header-inner">
                            <div class="container-fluid">
                                <div class="admin-content-header-logo"> <a href="<?php echo base_url();?>index.php/bienvenido_administrador">
                                    <img class="img-responsive" width="250px" src="<?php echo base_url();?>img/log.png">
                                </a> </div>
                                <!-- /admin-content-header-logo -->
                                <div class="admin-content-header-menu">
                                    <ul class="admin-content-header-menu-inner collapse">
                                        <li><a href="#" onclick="
                                                                var confirm= alertify.confirm('Confirmar','¿Esta seguro que desea cerrar sesión?',null,null).set('labels', {ok:'Confirmar', cancel:'Cancelar'});  
 
                                                                    confirm.set({transition:'slide'});      
                                                                     
                                                                    confirm.set('onok', function(){ //callbak al pulsar botón positivo
                                                                            alertify.success('Cerrando');
                                                                            setTimeout (window.location='<?php echo base_url().'index.php/cerrar_sesion';?>', 10000);
                                                                             
                                                                    });
                                                                     
                                                                    confirm.set('oncancel', function(){ //callbak al pulsar botón negativo
                                                                        alertify.error('Has Cancelado');
                                                                    });

                                                            ">Cerrar sesión</a></li>
                                    </ul>
                                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".admin-content-header-menu-inner"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
                                </div>
                                <!-- /.admin-content-header-menu  -->
                            </div>
                            <!-- /.container-fluid -->
                        </div>
                        <!-- /.admin-content-header-inner -->
                    </div>
                    <!-- /.admin-content-header -->
                    <div class="admin-content-main">
                        <div class="admin-content-main-inner">
                
                            <div class="container-fluid">
                                <div id="principal" style="display: block;">

                                    <h1 class="page-header">Próximos eventos</h1>
                                    <div class="row clearfix">
                                        <div class="col-md-12 column">
                                                <div id='calendar'></div>
                                        </div>
                                    </div>
                                    <hr>
                                    <input type="button"  class="btn btn-success pull-right" value="Agregar evento" onclick="window.open('http://calendar.estadiasyestancias.org/index.php/Calendar/index', 'Calendario de eventos', 'height=600,width=1200');">

        

                                </div>
                                <div id="student" style="display: none;">
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
                                                <?php foreach($todo -> result() as $row){?>
                                                    
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
                                <div id="curri" style="display: none;">
                                        <?php $q=1;?>
                                    <h1 class="page-header">Estudiantes con curriculum</h1>
                                    <div class="table-responsive">
                                        <table class="table ">
                                            <tr class="w3-blue">
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
                                                
                                                <td>
                                                    <h5>Curriculum Sistema</h5></td>
                                                
                                            </tr>
                                            <tbody>
                                                <?php foreach($alumno -> result() as $row){?>
                                                    <tr>
                                                        <td><?php echo $q++;?></td>
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
                                                        
														<td style="text-align: center; color: blue;">
                                                            <a  href="<?php echo base_url();?>index.php/C_curriculum/carga_curri/<?php echo $row -> matricula_alumno;?>" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=1000');return false;">

                                                       <i  style="cursor: all;" class="fa fa-file-text fa-2x" aria-hidden="true"></i></a>
														</td>
                                                       
                                                    </tr>
                                                    <?php } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div id="university" style="display: none;">
                                <?php $w=1;?>
                                    <h1 class="page-header">Universidades</h1>
                                    <div class="col-xs-12">
                                        <table class="table table-responsive">
                                            <tr class="w3-blue">
                                                <td>N°</td>
                                                <td>
                                                    <h5>Nombre</h5></td>
                                                <td>
                                                    <h5>Direccion</h5></td>
                                                <td>
                                                    <h5>Teléfono</h5></td>
                                                <td>
                                                    <h5>Email</h5></td>
                                                     <td>
                                                    <h5>Información</h5></td>
                                                
                                            </tr>
                                            <tbody>
                                                <?php foreach($univer -> result() as $row){?>
                                                    <tr>
                                                        <td><?php echo $w++;?></td>
                                                        <td>
                                                            <?php echo $row -> nombre_universidad;?>
                                                        </td>
                                                        <td>
                                                        
                                                        <?php echo $row -> calle_universidad;?>, <?php echo $row -> colonia_universidad;?>, <?php echo $row -> cp_universidad;?>, <?php echo $row -> municipio_universidad;?>, <?php echo $row -> estado_universidad;?>.


                                                            
                                                        </td>
                                                        <td>
                                                            <?php echo $row -> tel_fijo_universidad;?>
                                                        </td>
                                                        <td>
                                                            <?php echo $row -> email_universidad;?>
                                                        </td>
                                                        <td>
                                                        <a  href="http://cetic.estadiasyestancias.org/index.php/C_universidad/ver_divisiones2/<?php echo $row -> id_universidad;?>" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;"> más info</a>
                                                            
                                                        </td>
                                                        
                                                    </tr>
                                                    <?php } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div id="company" style="display: none;">
                                <?php $e=1;?>
                                    <h1 class="page-header">Empresas</h1>
                                    <div class="col-xs-12">
                                        <table class="table table-responsive">
                                            <tr>
                                                <td>N°</td>
                                                <td>
                                                    <h5>RFC </h5></td>
                                                <td>
                                                    <h5>Nombre </h5></td>
                                                <td>
                                                    <h5>Giro</h5></td>
                                                <td>
                                                    <h5>Email</h5></td>
                                               
                                            </tr>
                                            <tbody>
                                                <?php foreach($empresa -> result() as $row){?>
                                                    <tr>
                                                        <td><?php echo $e++;?></td>
                                                        <td>
                                                            <?php echo $row -> rfc_empresa;?>
                                                        </td>
                                                        <td>
                                                            <?php echo $row -> nombre_empresa;?>
                                                        </td>
                                                        <td>
                                                            <?php echo $row -> giro_empresa;?>
                                                        </td>
                                                        <td>
                                                            <?php echo $row -> email_empresa;?>
                                                        </td>
                                                        
                                                    </tr>
                                                    <?php } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div id="project" style="display: none;">
                                <?php $r=1;?>
                                    <h1 class="page-header">Proyectos</h1>
                                    <div class="col-xs-24">
                                        <table class="table table-responsive">
                                            <tr>
                                                <td>N°</td>
                                                <td>
                                                    <h5>RFC empresa </h5></td>
                                                <td>
                                                    <h5>Nombre empresa </h5></td>
                                                <td>
                                                    <h5>Nombre proyecto</h5></td>
                                                <td>
                                                    <h5>Área</h5></td>
                                                <td>
                                                    <h5>Responsable </h5></td>
                                                
                                               
                                            </tr>
                                            <tbody>
                                                <?php foreach($proyecto -> result() as $row){?>
                                                    <tr>
                                                        <td><?php echo $r++;?></td>
                                                        <td>
                                                            <?php echo $row -> rfc_empresa;?>
                                                        </td>
                                                        <td>
                                                            <?php echo $row -> nombre_empresa;?>
                                                        </td>
                                                        <td>
                                                            <?php echo $row -> nombre_proyecto;?>
                                                        </td>
                                                        <td>
                                                            <?php echo $row -> nom_area;?>
                                                        </td>
                                                        <td>
                                                            <?php echo $row -> responsable_proyecto;?>
                                                        </td>
                                                        
                                                        
                                                    </tr>
                                                    <div class="w3-container">
                                                        <div id="id0<?php echo $row -> id_proyecto; ?>" class="w3-modal">
                                                            <div class="w3-modal-content">
                                                                <header class="w3-container w3-teal"> <span onclick="document.getElementById('id0<?php echo $row -> id_proyecto; ?>').style.display='none'" class="w3-closebtn">&times;</span>
                                                                    <h2>Asignacion de alumnos</h2> </header>
                                                                <div class="w3-container">
                                                                    <div class="form-group">
                                                                        <label> Alumnos:
                                                                            <select>
                                                                                <?php 
                                                                    echo "<option>";
                                                                      echo $row -> matricula_alumno;
                                                                    echo "</option>";
                                                                ?>
                                                                            </select>
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                                <footer class="w3-container w3-teal">
                                                                    <p>Modal Footer</p>
                                                                </footer>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <?php } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div id="system" style="display: none;">
                                        
                                    <h2>Parámetros de inicio</h2>
                                    <div class="col-xs-4" style="cursor: pointer;">
                                        <div class="w3-blue w3-hover-shadow w3-center" onclick="cambia('pes')">
                                            <p style="font-size: 20px;">Estudiantes</p>
                                        </div>
                                    </div>
                                    <div class="col-xs-4" style="cursor: pointer;">
                                        <div class="w3-blue w3-hover-shadow w3-center" onclick="cambia('pem')">
                                            <p style="font-size: 20px;">Empresas</p>
                                        </div>
                                    </div>
                                    <div class="col-xs-4" style="cursor: pointer;">
                                        <div class="w3-blue w3-hover-shadow w3-center" onclick="cambia('pun')">
                                            <p style="font-size: 20px;">Universidades</p>
                                        </div>
                                    </div>
                                    <div id="pes" style="display: none;">
                                    <br>
                                    <hr>
                                        <div class="w3-card-4">

                                            <header class="w3-container w3-blue">
                                                <h1>Estudiantes</h1>
                                            </header>
                                            </div>

                                    <hr>
                                        <div class="col-xs-12">
    <div class="col-md-4">
        <div class="w3-card-4">
            <header class="w3-container w3-light-grey">
                <h3>Definición de objetivo</h3> </header>
            <div class="w3-container">
                <p style="text-align: justify;">
                    <?php foreach($parametro_alumno -> result() as $w){echo $w -> definicion;}?>
                </p>
                <hr> </div>
            <input type="button" class="w3-btn-block w3-blue" value="Editar" onclick=" document.getElementById('obj').style.display='block'" /> </div>
    </div>
    <div class="col-md-4">
        <div class="w3-card-4">
            <header class="w3-container w3-light-grey">
                <h3>Modelo</h3> </header>
            <div class="w3-container">
                <p style="text-align: justify;">
                    <?php foreach($parametro_alumno -> result() as $w){echo $w -> modelo;}?>
                </p>
                <hr> </div>
            <input type="button" class="w3-btn-block w3-blue" value="Editar" onclick=" document.getElementById('model').style.display='block'" /> </div>
    </div>
    <div class="col-md-4">
        <div class="w3-card-4">
            <header class="w3-container w3-light-grey">
                <h3>Requisitos</h3> </header>
            <div class="w3-container">
                <p style="text-align: justify;">
                    <?php foreach($parametro_alumno -> result() as $w){echo $w -> requisitos;}?>
                </p>
                <hr> </div>
            <input type="button" class="w3-btn-block w3-blue" value="Editar" onclick=" document.getElementById('req').style.display='block'" /> </div>
    </div>
</div>
                                    </div>
                                    <div id="pem" style="display: none;">
                                    <br>
                                    <hr>
                                        <div class="w3-card-4">

                                            <header class="w3-container w3-blue">
                                                <h1>Empresas</h1>
                                            </header>
                                            </div>
                                            
                                    <hr>
                                                                      <div class="col-xs-12">
    <div class="col-md-4">
        <div class="w3-card-4">
            <header class="w3-container w3-light-grey">
                <h3>Definición de objetivo</h3> </header>
            <div class="w3-container">
                <p style="text-align: justify;">
                    <?php foreach($parametro_empresa -> result() as $w){echo $w -> definicion;}?>
                </p>
                <hr> </div>
            <input type="button" class="w3-btn-block w3-blue" value="Editar" onclick=" document.getElementById('objE').style.display='block'" /> </div>
    </div>
    <div class="col-md-4">
        <div class="w3-card-4">
            <header class="w3-container w3-light-grey">
                <h3>Modelo</h3> </header>
            <div class="w3-container">
                <p style="text-align: justify;">
                    <?php foreach($parametro_empresa -> result() as $w){echo $w -> modelo;}?>
                </p>
                <hr> </div>
            <input type="button" class="w3-btn-block w3-blue" value="Editar" onclick=" document.getElementById('modelE').style.display='block'" /> </div>
    </div>
    <div class="col-md-4">
        <div class="w3-card-4">
            <header class="w3-container w3-light-grey">
                <h3>Requisitos</h3> </header>
            <div class="w3-container">
                <p style="text-align: justify;">
                    <?php foreach($parametro_empresa -> result() as $w){echo $w -> requisitos;}?>
                </p>
                <hr> </div>
            <input type="button" class="w3-btn-block w3-blue" value="Editar" onclick=" document.getElementById('reqE').style.display='block'" /> </div>
    </div>
</div>
                                    </div>
                                    <div id="pun" style="display: none;">
                                    <br>
                                    <hr>
                                        <div class="w3-card-4">

                                            <header class="w3-container w3-blue">
                                                <h1>Universidades</h1>
                                            </header>
                                            </div>
                                            <br>
                                    <hr>
                                    </div>
                                </div>
                    <div id="addcalendar" style="display: none;">
                        <h1>Nueva entrevista</h1>
                    </div>
                    <div id="addexamen" style="display: none;">
                    <div class="row">
                                Asignar exámen
                            <div class="col-xs-12">
                            <form method="post" action="<?php echo base_url();?>index.php/C_examen/asigna">
                                <div class="col-xs-5">
                                    <div class="form-group">
                                             <label>Alumno:
                                        <select  name="matri">
                                             <?php foreach($alumno -> result() as $row){?>
                                             <option style="color: black;" value="<?php echo $row -> matricula_alumno;?>">
                                              <?php echo $row -> Nom_completo;?>
                                            </option>
                                            <?php } ?>
                                        </select>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-xs-5">
                                            <div class="form-group">
                                    <label>proyecto: 
                                    <select class="form-control" name="idexa">
                                     <?php foreach($exa -> result() as $row){?>
                                        <option style="color: black;" value="<?php echo $row -> id_examen;?>">
                                             <?php echo $row -> nombre_examen;?>
                                        </option>
                                        <?php } ?>
                                    </select>
                                </label>
                                </div>
                                </div>
                                <div class="col-xs-2">
                                <br>
                                    <input type="submit" class="btn btn-success" value="Asignar">
                                </div>
                            </form>
                            </div>
                        </div>
                        <h1>Exámenes</h1>
                            <div class="w3-container">
                              
                              <div class="w3-card-4" style="width:100%;">
                                <header class="w3-container w3-blue">
                                  <h1>Subir</h1>
                                </header>

                                <div class="w3-container">
                                <div class="col-xs-6">
                                    <?=form_open_multipart(base_url()."index.php/C_examen/do_upload")?>
                                    <p>NOTA(*): El nombre del documento debe contener la siguente estructura <strong>EX_siglascarrera_area.pdf<br>Ejemplo: EX_TIC_redes.pfd</strong></p>
                                    
                                    <input class="form_control" type="file" name="userfile" /><br>
                                    <input type="submit" class="btn" value="Subir" />
                                <?=form_close()?>
                                </div>
                                  <div class="col-xs-6">
                                      <div class="table-responsive">
                                        <table class="table">
                                            <tr>
                                                <td>
                                                    <h5>Identificador exámen</h5></td>
                                                <td>
                                                    <h5>Nombre del documento</h5></td>
                                                <td>
                                                    <h5></h5></td>
                                                
                                                <td>
                                                    <h5>PDF</h5></td>
                                                
                                            </tr>
                                            <tbody>
                                                <?php foreach($exa -> result() as $row){?>
                                                    <tr>
                                                       
                                                        <td>
                                                            <?php echo $row -> id_examen;?>
                                                        </td>
                                                        <td>
                                                            <?php echo $row -> nombre_examen;?>
                                                        </td>
                                                        <td style="text-align: center; color: blue;"><a href="<?php echo base_url();?>examenes/<?php echo $row -> nombre_examen;?>"><i  style="cursor: all;" class="fa fa-file-text fa-2x" aria-hidden="true"></i></a>
                                                        </td>
                                                        
                                                       
                                                    </tr>
                                                    <?php } ?>
                                            </tbody>
                                        </table>
                                    </div>

                                  </div>
                                </div>
                                <br><br>
                        
                                
                        
                                <footer class="w3-container w3-blue">
                                  <h5>Subir los exámenes en formato PDF</h5>
                                </footer>
                              </div>
                            </div>

                            
                            <br><br>
                             
                    </div>
                    <div id="addalupro" style="display: none;">
                        <h1>Asignar proyecto</h1>
                        <br><br>
                        <div class="row">
                            <div class="col-xs-12">
                            <form method="post" action="<?php echo base_url();?>index.php/C_proyecto/asignar">
                                <div class="col-xs-5">
                                    <div class="form-group">
                                             <label>Alumno:
                                        <select class="form-control" name="matri">
                                             <?php foreach($alumno -> result() as $row){?>
                                             <option style="color: black;" value="<?php echo $row -> matricula_alumno;?>">
                                              <?php echo $row -> Nom_completo;?>
                                            </option>
                                            <?php } ?>
                                        </select>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-xs-5">
                                            <div class="form-group">
                                    <label>Proyecto: 
                                    <select class="form-control" name="idpro">
                                     <?php foreach($proyecto -> result() as $row){?>
                                        <option style="color: black;" value="<?php echo $row -> id_proyecto;?>">
                                             <?php echo $row -> nombre_proyecto;?>
                                        </option>
                                        <?php } ?>
                                    </select>
                                </label>
                                </div>
                                </div>
                                <div class="col-xs-2">
                                <br>
                                    <input type="submit" class="btn btn-success" value="Guardar">
                                </div>
                            </form>
                            </div>
                        </div>
                        
                        
                       
                        
                    </div>

                            </div>
                            <!-- /.container-fluid -->
                        </div>
                        <!-- /.admin-content-main-inner -->
                    </div>
                    <!-- /.container-fluid -->
                    <div class="admin-content-footer">
                        <div class="admin-content-footer-inner">
                            <div class="container-fluid">
                                <div class="admin-content-footer-left"> &copy; 2016-2017 CETICJalisco - Material Real Estate Template. All rights reserved. </div>
                                <!-- /.admin-content-footer-left -->
                                <div class="admin-content-footer-right"> Created by <a href="http://byaviators.com">Aviators</a></div>
                                <!-- /.admin-content-footer-right -->
                            </div>
                            <!-- /.container-fluid -->
                        </div>
                        <!-- /.admin-content-footer-inner -->
                    </div>
                    <!-- /.admin-content-footer -->
                </div>
                <!-- /.admin-content-main-inner -->
            </div>
            <!-- /.admin-content -->
    </div>
    <!--adminwtaper-->
    <?php include 'layout/footer/footer_menu.php';?>
</body>

</html>
<div id="obj" class="w3-modal">
    <div class="w3-modal-content">
        <header class="w3-container w3-blue"> <span onclick="document.getElementById('obj').style.display='none'" class="w3-closebtn">&times;</span>
            <h2>Editar objetivo</h2> </header>
        <div class="w3-container">
            <br>
            <form method="post" action="C_sistema/actualizaOBJ/<?php foreach($parametro_alumno -> result() as $w){echo $w -> id_parametro;} ?>">
                <label> Objetivo:
                    <textarea rows="5" style="resize: vertical;" class="form-control" name="txtobj"><?php foreach($parametro_alumno -> result() as $w){echo $w -> definicion;}?>
                    </textarea>
                </label>
        </div>
        <footer class="w3-container w3-blue">
            <br>
            <input type="submit" class="btn btn-success pull-right" value="Guardar" />
            <br>
            <br> </form>
        </footer>
    </div>
</div>
</div>
<div id="model" class="w3-modal">
    <div class="w3-modal-content">
        <header class="w3-container w3-blue"> <span onclick="document.getElementById('model').style.display='none'" class="w3-closebtn">&times;</span>
            <h2>Editar modelo</h2> </header>
        <div class="w3-container">
            <br>
            <form method="post" action="C_sistema/actualizaMDL/<?php foreach($parametro_alumno -> result() as $w){echo $w -> id_parametro;} ?>">
                <label> Objetivo:
                    <textarea rows="5" style="resize: vertical;" class="form-control" name="txtobj"><?php foreach($parametro_alumno -> result() as $w){echo $w -> modelo;}?>
                    </textarea>
                </label>
        </div>
        <footer class="w3-container w3-blue">
            <br>
            <input type="submit" class="btn btn-success pull-right" value="Guardar" />
            <br>
            <br> </form>
        </footer>
    </div>
</div>
</div>
<div id="req" class="w3-modal">
    <div class="w3-modal-content">
        <header class="w3-container w3-blue"> <span onclick="document.getElementById('req').style.display='none'" class="w3-closebtn">&times;</span>
            <h2>Editar requisitos</h2> </header>
        <div class="w3-container">
            <br>
            <form method="post" action="C_sistema/actualizaRQS/<?php foreach($parametro_alumno -> result() as $w){echo $w -> id_parametro;} ?>">
                <label> Objetivo:
                    <textarea rows="5" style="resize: vertical;" class="form-control" name="txtobj"><?php foreach($parametro_alumno -> result() as $w){echo $w -> requisitos;}?>
                    </textarea>
                </label>
        </div>
        <footer class="w3-container w3-blue">
            <br>
            <input type="submit" class="btn btn-success pull-right" value="Guardar" />
            <br>
            <br> </form>
        </footer>
    </div>
</div>
</div>


<div id="objE" class="w3-modal">
    <div class="w3-modal-content">
        <header class="w3-container w3-blue"> <span onclick="document.getElementById('objE').style.display='none'" class="w3-closebtn">&times;</span>
            <h2>Editar objetivo</h2> </header>
        <div class="w3-container">
            <br>
            <form method="post" action="C_sistema/actualizaOBJ/<?php foreach($parametro_empresa -> result() as $w){echo $w -> id_parametro;} ?>">
                <label> Objetivo:
                    <textarea rows="5" style="resize: vertical;" class="form-control" name="txtobj"><?php foreach($parametro_empresa -> result() as $w){echo $w -> definicion;}?>
                    </textarea>
                </label>
        </div>
        <footer class="w3-container w3-blue">
            <br>
            <input type="submit" class="btn btn-success pull-right" value="Guardar" />
            <br>
            <br> </form>
        </footer>
    </div>
</div>
</div>
<div id="modelE" class="w3-modal">
    <div class="w3-modal-content">
        <header class="w3-container w3-blue"> <span onclick="document.getElementById('modelE').style.display='none'" class="w3-closebtn">&times;</span>
            <h2>Editar modelo</h2> </header>
        <div class="w3-container">
            <br>
            <form method="post" action="C_sistema/actualizaMDL/<?php foreach($parametro_empresa -> result() as $w){echo $w -> id_parametro;} ?>">
                <label> Objetivo:
                    <textarea rows="5" style="resize: vertical;" class="form-control" name="txtobj"><?php foreach($parametro_empresa -> result() as $w){echo $w -> modelo;}?>
                    </textarea>
                </label>
        </div>
        <footer class="w3-container w3-blue">
            <br>
            <input type="submit" class="btn btn-success pull-right" value="Guardar" />
            <br>
            <br> </form>
        </footer>
    </div>
</div>
</div>
<div id="reqE" class="w3-modal">
    <div class="w3-modal-content">
        <header class="w3-container w3-blue"> <span onclick="document.getElementById('reqE').style.display='none'" class="w3-closebtn">&times;</span>
            <h2>Editar requisitos</h2> </header>
        <div class="w3-container">
            <br>
            <form method="post" action="C_sistema/actualizaRQS/<?php foreach($parametro_empresa -> result() as $w){echo $w -> id_parametro;} ?>">
                <label> Objetivo:
                    <textarea rows="5" style="resize: vertical;" class="form-control" name="txtobj"><?php foreach($parametro_empresa -> result() as $w){echo $w -> requisitos;}?>
                    </textarea>
                </label>
        </div>
        <footer class="w3-container w3-blue">
            <br>
            <input type="submit" class="btn btn-success pull-right" value="Guardar" />
            <br>
            <br> </form>
        </footer>
    </div>
</div>
</div>