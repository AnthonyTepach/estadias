     
     <div class="header header-minimal primary">
                 <div class="header-wrapper">
                <div class="container">
                    <div class="header-inner">
                        <div class="header-main">
                            <div class="header-title">
                                <a href="<?php echo base_url(); ?>index.php/bienvenido_universidad"> <img class="img img-responsive img-rounded" src="<?php echo base_url();?>/img/logi.png" style="width: 300px; height:100px"  alt="Estancias"></a>
                            </div>
                            <!-- /.header-title -->
                            <div class="header-navigation">
                                <div class="nav-main-wrapper">
                                    <div class="nav-main-title visible-xs">
                                        <a href="<?php echo base_url(); ?>bienvenido" style="font-size:12px;"> <img src="<?php echo base_url();?>/img/logo.png" style="width: 50px; height:32px"  alt="Estancias" >  Estad&iacute;as&amp;Estancias </a>
                                    </div>
                                    <!-- /.nav-main-title -->
                                    <br>
                                    
                                    <div class="nav-main-inner" >
                                        <nav>
                                            <ul id="nav-main" class="nav nav-pills">
                                                   <li class="has-children ">
                                                    <a href="#"> <i class="fa fa-university fa-2x" aria-hidden="true"></i> Registrar áreas <i class="fa fa-caret-down"></i></a>
                                                    <div> <a href="#"><i class="fa fa-university" aria-hidden="true"></i>
 Registrar áreas <i class="fa fa-caret-down"></i></a>
                                                        <ul class="sub-menu">
                                                            <li><a href="<?php echo base_url();?>index.php/C_universidad/view_new_area"><i class="fa fa-plus" aria-hidden="true"></i>
 Agregar</a></li>
                                                            
                                                        </ul>
                                                        <ul class="sub-menu">
                                                            <li><a href="<?php echo base_url();?>index.php/C_universidad/ver_divisiones"><i class="fa fa-plus" aria-hidden="true"></i>
 Ver áreas</a></li>
                                                            
                                                        </ul>
                                                    </div>
                                                </li>
                                               
                                                <li class="has-children ">
                                                    <a href="#"> <i class="fa fa-university fa-2x" aria-hidden="true"></i> Alumnos postulados <i class="fa fa-caret-down"></i></a>
                                                    <div> <a href="#"><i class="fa fa-university" aria-hidden="true"></i>
 Alumnos postulados <i class="fa fa-caret-down"></i></a>
                                                        
                                                        <ul class="sub-menu">
                                                            <li><a href="<?php echo base_url();?>index.php/C_universidad/ver_alumnos"><i class="fa fa-plus" aria-hidden="true"></i>
 Ver alumnos</a></li>
                                                            
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