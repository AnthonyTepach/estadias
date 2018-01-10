 <script type="text/javascript">
    alertify.alert('Bienvenido <?php echo date('Y').'/'.date('m').'/'.date('j'); ?>','<?php 
            foreach($info->result() as $row) {
                                        echo 'Bienvenido '.$row -> nombre_alumno." ".$row -> a_paterno_alumno." ".$row-> a_materno_alumno.'<BR> Favor de registrar su curriculum en la plataforma, en la seccion de Curriculum-> Agregar curriculum y subir su curriculum PDF en Curriculum ->Subir PDF,de lo contrario NO seras tomado en cuenta para las estadías de ENERO-ABRIL 2017.';
                                      }
         ?>').set('label', 'Aceptar');
 </script>
 <div class="container"> 
    <br>

     <div class="w3-card-4">

            <header class="w3-container w3-blue">
              <h1>Definición y Metodología</h1>
            </header>

            <div class="w3-container">
              <h4>Definición</h4>
                  <p style="text-align: justify;">
                      <?php foreach($parametro -> result() as $row){ echo $row -> definicion;}?>
                  </p>
              <hr>
              <h4>Modelo</h4>
                <p style="text-align: justify;">
                    <?php foreach($parametro -> result() as $row){ echo $row -> modelo;}?>
                </p>
              <hr>
              <h4>Requisitos</h4>
                <p style="text-align: justify;">
                    <?php foreach($parametro -> result() as $row){ echo $row -> requisitos;}?>
                </p>
            </div>

            <footer class="w3-container w3-blue">
              <h5></h5>
            </footer>

        </div>
         <br>
         <div class="w3-card-4">

                <header class="w3-container w3-blue">
                    <h1> 
                         Acerca de <?php foreach($info->result() as $row) { echo $row -> nombre_alumno; } ?>
                    </h1>
                </header>

                <div class="w3-container">
                <h3>
                     <?php 
                        foreach($carrera->result() as $row) {
                        echo "Estudias la carrera en ".$row -> nombre_carrera." a nivel ".$row -> nivel ;
                      }    
                    ?>
                </h3>
                    <div class="col-xs-4">
                        <table class="table" >
                            <h3>Informaci&oacute;n personal</h3>
                            <tr>
                                <th>Matricula escolar: </th>
                                <td>
                                    <?php 
                                        foreach($info->result() as $row) {
                                        echo $row -> matricula_alumno;
                                      }
                                    ?>                                    
                                </td>
                            </tr>

                            <tr>
                                <th>Nombre completo:</th>
                                <td>
                                 <?php 
                                      foreach($info->result() as $row) {
                                        echo $row -> nombre_alumno." ".$row -> a_paterno_alumno." ".$row-> a_materno_alumno;
                                      }    
                                    ?>
                                </td>
                            </tr>
                            <tr>
                                <th>N° seguro social: </th>
                                <td>
                                    <?php 
                                        foreach($info->result() as $row) {
                                        echo $row -> no_seguro_social;
                                      }
                                    ?>                                    
                                </td>
                            </tr>
                             <tr>
                                <th>Universidad: </th>
                                <td>
                                    <?php 
                                        foreach($es ->result() as $rw) {
                                        echo $rw -> nombre_universidad;
                                      }
                                    ?>                                    
                                </td>
                            </tr>
                        </table>                        
                    </div>
                    <div class="col-xs-4">
                        <table class="table">
                            <h3>Direcci&oacute;n</h3>
                            <tr>
                                <th>Calle: </th>
                                <td>
                                    <?php 
                                        foreach($info->result() as $row) {
                                        echo $row -> calle_alumno;
                                      }
                                    ?>                                    
                                </td>
                            </tr>
                            <tr>
                                <th>Colonia: </th>
                                <td>
                                    <?php 
                                        foreach($info->result() as $row) {
                                        echo $row -> colonia_alumno;
                                      }
                                    ?>                                    
                                </td>
                            </tr>
                            <tr>
                                <th>Municipio: </th>
                                <td>
                                    <?php 
                                        foreach($info->result() as $row) {
                                        echo $row -> municipio_alumno;
                                      }
                                    ?>                                    
                                </td>
                            </tr>
                            <tr>
                                <th>Estado: </th>
                                <td>
                                    <?php 
                                        foreach($info->result() as $row) {
                                        echo $row -> estado_alumno;
                                      }
                                    ?>                                    
                                </td>
                            </tr>

                        </table>    
                    </div>
                    <div class="col-xs-4">
                        <table class="table">
                        <h3>Informaci&oacute;n de contacto</h3>
                           <tr>
                                <th>E-mail: </th>
                                <td>
                                    <?php 
                                        foreach($info->result() as $row) {
                                        echo $row -> email_alumno;
                                      }
                                    ?>                                    
                                </td>
                            </tr>
                            <tr>
                                <th>Tel&eacute;fono: </th>
                                <td>
                                    <?php 
                                        foreach($info->result() as $row) {
                                        echo $row -> tel_cel_alumno;
                                      }
                                    ?>                                    
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>

                <footer class="w3-container w3-blue">
                  <h5></h5>
                </footer>

                </div>      

        
        
        <br>
</div> <!-- container-->
