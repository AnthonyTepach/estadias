
     <div class="header header-minimal primary">
                 <div class="header-wrapper">
                <div class="container">
                    <div class="header-inner">
                        <div class="header-main">
                            <div class="header-title">
                                <a href="<?php echo base_url(); ?>index.php/bienvenido_alumno"> <img class="img img-responsive img-rounded" src="<?php echo base_url();?>/img/logi.png" style="width: 300px; height:100px"  alt="Estancias"></a>
                            </div>
                            <!-- /.header-title -->
                            <div class="header-navigation">
                                <div class="nav-main-wrapper">
                                    <div class="nav-main-title visible-xs">
                                        <a href="<?php echo base_url(); ?>bienvenido_alumno" style="font-size:12px;"> <img src="<?php echo base_url();?>/img/logo.png" style="width: 50px; height:32px"  alt="Estancias" >  Estad&iacute;as&amp;Estancias </a>
                                    </div>
                                    <!-- /.nav-main-title -->
                                    <br>
                                    
                                    <div class="nav-main-inner" >
                                        <nav>
                                            <ul id="nav-main" class="nav nav-pills">
                                                
                                                <li class="has-children "> <a href="#" ><i class="fa fa-graduation-cap fa-2x" aria-hidden="true"></i>
 Curriculum <i class="fa fa-caret-down"></i></a>
                                                    <div> <a href="#"><i class="fa fa-graduation-cap" aria-hidden="true"></i> Curriculum <i class="fa fa-caret-down"></i></a>
                                                        
                                                    <?php
                                                    foreach($num_curri->result() as $row) { 
                                                         $numero =$row-> num;
                                                     }
                                                     if($numero == 0){?>
                                                        <ul class="sub-menu">
                                                            <li>
                                                                <a  href="<?php echo base_url();?>index.php/CV">
                                                                    <i class="fa fa-plus" aria-hidden="true"></i>
                                                                     Agregar curriculum
                                                                 </a>
                                                             </li>
                                                        </ul>
                                                       <?php } else { ?>
                                                        <ul class="sub-menu">
                                                            <li><a  href="<?php echo base_url();?>index.php/C_curriculum/carga_curri/<?php foreach($info -> result() as $row){ echo $row -> matricula_alumno;}?>"><i class="fa fa-plus" aria-hidden="true"></i>
 Ver curruculum</a></li>
                                                        </ul>
                                                     <?php } ?>
                                                    </div>
                                                </li>
                                                <li class="has-children "> <a href="#"><i class="fa fa-building-o fa-2x" aria-hidden="true"></i>
 Proyecto <i class="fa fa-caret-down"></i></a>
                                                    <div> <a href="#"><i class="fa fa-building" aria-hidden="true"></i>
 Proyecto <i class="fa fa-caret-down"></i></a>
                                                        <ul class="sub-menu">
                                                            <li><a href="<?php echo base_url();?>index.php/ver_proyecto"><i class="fa fa-plus" aria-hidden="true"></i>
 Descripción de proyecto</a></li>
                                                            
                                                        </ul>
                                                    </div>
                                                </li>
                                               <!-- <li class="has-children " >
                                                    <a href="#"> <i class="fa fa-university fa-2x" aria-hidden="true"></i> Entrevista <i class="fa fa-caret-down"></i></a>
                                                    <div> <a href="#"><i class="fa fa-university" aria-hidden="true"></i>
 Entrevista <i class="fa fa-caret-down"></i></a>
                                                        <ul class="sub-menu">
                                                            <li><a href="#"><i class="fa fa-plus" aria-hidden="true"></i>
 Ver entrevista</a></li>
                                                            
                                                        </ul>
                                                    </div>
                                                </li>-->
                                                 <li class="has-children ">
                                                    <a href="#"> <i class="fa fa-university fa-2x" aria-hidden="true"></i> Exámen <i class="fa fa-caret-down"></i></a>
                                                    <div> <a href="#"><i class="fa fa-university" aria-hidden="true"></i>
 Exámen <i class="fa fa-caret-down"></i></a>
                                                        <ul class="sub-menu">
                                                            <li><a href="<?php echo base_url();?>index.php/mi_examen"><i class="fa fa-plus" aria-hidden="true"></i>
 Ver exámen</a></li>
                                                            
                                                        </ul>
                                                    </div>
                                                </li>
                                                <li class="has-children "> <a href="#"><i class="fa fa-sign-in fa-2x" aria-hidden="true"></i>
 <?php echo $nombre;?> <i class="fa fa-caret-down"></i></a>
                                                    <div> <a href="#"><i class="fa fa-sign-in" aria-hidden="true"></i>
 <?php echo $nombre;?> <i class="fa fa-caret-down"></i></a>
                                                        <ul class="sub-menu">
                                                            <li> <a style="cursor: pointer;" onclick="
                                                                var confirm= alertify.confirm('Confirmar','¿Esta seguro que desea cerrar sesión?',null,null).set('labels', {ok:'Confirmar', cancel:'Cancelar'});  
 
                                                                    confirm.set({transition:'slide'});      
                                                                     
                                                                    confirm.set('onok', function(){ //callbak al pulsar botón positivo
                                                                            alertify.success('Cerrando');
                                                                            setTimeout (window.location='<?php echo base_url().'index.php/cerrar_sesion';?>', 10000);
                                                                             
                                                                    });
                                                                     
                                                                    confirm.set('oncancel', function(){ //callbak al pulsar botón negativo
                                                                        alertify.error('Has Cancelado');
                                                                    });

                                                            ");   
 ">Cerrar sesión</a> </li>
                                                            
                                                            
                                                        </ul>
                                                    </div>
                                                </li>
                                            </ul>
                                            <!-- /.nav -->
                                        </nav>
                                    </div>
                                    <!-- /.nav-main-inner -->
                                </div>
                                <!-- /.nav-main-wrapper -->
                                <button type="button" class="navbar-toggle"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
                            </div>
                            <!-- /.header-navigation -->
                        </div>
                        <!-- /.header-main -->
                    </div>
                    <!-- /.header-inner -->
                </div>
                <!-- /.container -->
            </div>
            <!-- /.header-wrapper -->

        </div>

       <div class="w3-container">
          <div id="Spdf" class="w3-modal">
            <div class="w3-modal-content">
              <header class="w3-container w3-blue"> 
                <span onclick="document.getElementById('Spdf').style.display='none'" 
                class="w3-closebtn">&times;</span>
                <h2>Subir curriculum</h2>
              </header>
              <div class="w3-container">
              
                <?=form_open_multipart(base_url()."index.php/C_curriculum/do_upload")?>
                    <p>NOTA(*): El nombre del documento debe contener la siguente estructura <strong>CV_nombre_apellido.pdf</strong></p>
                    <input type="text" name="txtma" class="form_control" hidden="" value="<?php foreach($info -> result() as $ma){ echo $ma -> matricula_alumno;}?>">
                    <input class="form_control" type="file" name="userfile" /><br>
                    <input type="submit" class="btn" value="Subir" />
                <?=form_close()?>
              </div>
              <footer class="w3-container w3-blue">
                <p>Solo son admitidos archivos con extención <strong>PDF</strong></p>
              </footer>
            </div>
          </div>
        </div>