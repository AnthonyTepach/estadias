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
<h1>Empresa</h1>
	<div class="panel panel-default">
		<div class="panel-heading">
			<h4>Acerca de 
				<?php 
				 	foreach($info->result() as $row) {
			          echo $row -> nombre_empresa;
			        } 
			  	?>
			</h4>
		</div>
		<div class="row">
			 <div class="col-sm-6 col-md-4">
                        <table class="table" >
                            <h3>Informaci&oacute;n</h3>
                            <tr>
                                <th>RFC Empresa: </th>
                                <td>
                                    <?php 
									 	foreach($info->result() as $row) {
								            echo $row -> rfc_empresa;
								         } 
									  ?>                                    
                                </td>
                            </tr>

                            <tr>
                                <th>Nombre de empresa:</th>
                                <td>
                                <?php 
								 	foreach($info->result() as $row) {
							          echo $row -> nombre_empresa;
							        } 
							  	?>
                                </td>
                            </tr>
                            <tr>
                                <th>Giro de la empresa: </th>
                                <td>
                                    <?php 
										foreach($info->result() as $row) {
										    echo $row -> giro_empresa;
									    } 
								    ?>                                    
                                </td>
                            </tr>
                        </table>
                    </div>
                     <div class="col-sm-6 col-md-4">
                        <table class="table">
                            <h3>Direcci&oacute;n</h3>
                            <tr>
                                <th>Calle: </th>
                                <td>
                                    <?php 
                                        foreach($info->result() as $row) {
                                        echo $row -> calle_empresa;
                                      }
                                    ?>                                    
                                </td>
                            </tr>
                            <tr>
                                <th>Colonia: </th>
                                <td>
                                    <?php 
                                        foreach($info->result() as $row) {
                                        echo $row -> colonia_empresa;
                                      }
                                    ?>                                    
                                </td>
                            </tr>
                            <tr>
                                <th>Municipio: </th>
                                <td>
                                    <?php 
                                        foreach($info->result() as $row) {
                                        echo $row -> municipio_empresa;
                                      }
                                    ?>                                    
                                </td>
                            </tr>
                            <tr>
                                <th>Estado: </th>
                                <td>
                                    <?php 
                                        foreach($info->result() as $row) {
                                        echo $row -> estado_empresa;
                                      }
                                    ?>                                    
                                </td>
                            </tr>

                        </table>
                    </div>
                    <div class="col-sm-6 col-md-4">
                        <table class="table">
                        <h3>Informaci&oacute;n de contacto</h3>
                           <tr>
                                <th>E-mail: </th>
                                <td>
                                    <?php 
                                        foreach($info->result() as $row) {
                                        echo $row -> email_empresa;
                                      }
                                    ?>                                    
                                </td>
                            </tr>
                            <tr>
                                <th>Tel&eacute;fono: </th>
                                <td>
                                    <?php 
                                        foreach($info->result() as $row) {
                                        echo $row -> tel_fijo_empresa;
                                      }
                                    ?>                                    
                                </td>
                            </tr>
                        </table>
                    </div>
		</div><!--row-->
	</div>

<div id="student" style="display: block;">

                                    <h1 class="page-header">Estudiantes postulados</h1>
                                    <div class="table-responsive">
                                        <table class="table ">
                                            <tr class="w3-blue">
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
                                                    <h5>Curriculum</h5></td>
                                                
                                            </tr>
                                            <tbody>
                                                <?php foreach($alumno -> result() as $row){?>
                                                    <tr>
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
                                                        <td style="text-align: center; color: blue;"><a href="<?php echo base_url();?>uploads/<?php echo $row -> nombre;?>"><i  style="cursor: all;" class="fa fa-file-text fa-2x" aria-hidden="true"></i></a>
</td>
                                                       
                                                    </tr>
                                                    <?php } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

</div>

  