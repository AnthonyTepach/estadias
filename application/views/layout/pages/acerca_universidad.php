<div class="container">
<br>

<h1>Universidad</h1>
	<div class="panel panel-default">
		<div class="panel-heading">
			<h4>Acerca de la
				<?php 
				 	foreach($info->result() as $row) {
			          echo $row -> nombre_universidad;
			        } 
			  	?>
			</h4>
		</div>
		<div class="row">
			 <div class="col-sm-6 col-md-4">
                        <table class="table" >
                            <h3>Informaci&oacute;n</h3>
                            
                            <tr>
                                <th>Nombre de universidad:</th>
                                <td>
                                <?php 
								 	foreach($info->result() as $row) {
							          echo $row -> nombre_universidad;
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
                                        echo $row -> calle_universidad;
                                      }
                                    ?>                                    
                                </td>
                            </tr>
                            <tr>
                                <th>Colonia: </th>
                                <td>
                                    <?php 
                                        foreach($info->result() as $row) {
                                        echo $row -> colonia_universidad;
                                      }
                                    ?>                                    
                                </td>
                            </tr>
                            <tr>
                                <th>Municipio: </th>
                                <td>
                                    <?php 
                                        foreach($info->result() as $row) {
                                        echo $row -> municipio_universidad;
                                      }
                                    ?>                                    
                                </td>
                            </tr>
                            <tr>
                                <th>Estado: </th>
                                <td>
                                    <?php 
                                        foreach($info->result() as $row) {
                                        echo $row -> estado_universidad;
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
                                        echo $row -> email_universidad;
                                      }
                                    ?>                                    
                                </td>
                            </tr>
                            <tr>
                                <th>Tel&eacute;fono: </th>
                                <td>
                                    <?php 
                                        foreach($info->result() as $row) {
                                        echo $row -> tel_fijo_universidad;
                                      }
                                    ?>                                    
                                </td>
                            </tr>
                        </table>
                    </div>
		</div><!--row-->
	</div>
</div>