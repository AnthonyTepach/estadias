   <script type="text/javascript">
       var divInicial = "principal";  var ini ='pes';
    function DinamicoDiv(divActual) {
    document.getElementById(divActual).style.display = 'block';
    if (divInicial != divActual) {
        document.getElementById(divInicial).style.display = 'none';
    }
    divInicial = divActual;
}
function cambia(actual){
   
document.getElementById(actual).style.display='block';
if ( ini != actual) {
document.getElementById(ini).style.display='none';
}
ini =actual;
}
   </script>

    <div class="admin-navigation">
   
    <div class="admin-navigation-inner">
        <nav>
            <ul class="menu">
                <li class="avatar active">
                    <a href="#" onclick="DinamicoDiv('principal')">
                        <img src="<?php echo base_url();?>img/avatar.png" alt="avatar">

                        <span class="avatar-content">
                            <span class="avatar-title"><?php echo $nombre?></span>
                            <span class="avatar-subtitle">Administrador</span>
                        </span><!-- /.avatar-content -->
                    </a>
                </li>

                <li class="">
                    <a href="#" onclick="DinamicoDiv('student')"><strong><i class="fa fa-graduation-cap" aria-hidden="true"></i>
					</strong> <span>Estudiantes</span></a>
                </li>
                <li class="">
                    <a href="#" onclick="DinamicoDiv('curri')"><strong><i class="fa fa-graduation-cap" aria-hidden="true"></i>
                    </strong> <span>Curriculums</span></a>
                </li>

                <li class="">
                    <a href="#" onclick="DinamicoDiv('university')"><strong><i class="fa fa-university" aria-hidden="true"></i>
					</strong> <span>Universidades</span></a>
                </li>

                <li class="">
                    <a href="#" onclick="DinamicoDiv('company')"><strong><i class="fa fa-building" aria-hidden="true"></i>

                    </strong> <span>Empresas</span></a>
                </li>

                <li class="">
                    <a href="#" onclick="DinamicoDiv('project')"><strong><i class="fa fa-briefcase"></i></strong> <span>Proyectos</span></a>
                </li>

                <li class="  ">
                    <a href="#" onclick="DinamicoDiv('system')"><strong><i class="fa fa-cogs" aria-hidden="true"></i></strong> <span>Parametros del sistema</span></a>
                </li>
                <li>
                    <a href="#" onclick="DinamicoDiv('addalupro')" ><strong><i class="fa fa-file-text-o" aria-hidden="true"></i></strong><span>Asignar proyecto</span></a>
                </li>
                <li>
                    <a href="#" onclick="DinamicoDiv('addexamen')" ><strong><i class="fa fa-file-text-o" aria-hidden="true"></i></strong><span>Exámenes</span></a>
                </li>
                 <li>
                    <a href="#" onclick="DinamicoDiv('addcalendar')"><strong><i class="fa fa-calendar-plus-o" aria-hidden="true"></i></strong><span>Asignar entrevista</span></a>
                </li>
                <li>
                    <a href="#"><strong><i class="fa fa-sign-out"></i></strong> <span>Cerrar sesión</span></a>
                </li>
            </ul>
        </nav>
        
        <div class="projects">
            <h2>Projects</h2>

            <ul>
                <li class="orange"><a href="http://ceticjalisco.com">CETIC JALISCO</a></li>
                
            </ul>
        </div><!-- /.projects -->
        <div class="layer"></div>
    </div><!-- /.admin-navigation-inner -->
</div><!-- /.admin-navigation -->