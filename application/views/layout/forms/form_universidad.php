<div class="container">
	<br>
	<form method="post" action="<?php echo site_url('C_universidad/add_universidad'); ?>">
    <div class="col-sm-6 col-md-5 col-md-offset-2 col-lg-6 col-lg-offset-0">
        <fieldset>
            <legend>Informaci&oacute;n general</legend>
            <div class="form-group">
                <input type="text" name="txtnom" id="txtnom" required="" class="form-control" placeholder="Nombre de la universidad(*)" ng-model="formData.txtnom"> 
            </div>          
        </fieldset>
        <br>
        <br>
         <fieldset>
                    <legend>Informaci&oacute;n de contacto</legend>
                    <div class="form-group">
                        <input type="email" name="txtemail" id="txtemail" placeholder="example@email.com" required="" class="form-control" ng-model="formData.txtemail"> </div>
                    <div class="form-group">
                        <input type="text" name="txttel" id="txttel" placeholder="Teléfono (*)" maxlength="10" class="form-control" ng-model="formData.txttel"> </div>
                </fieldset>
    </div>
    <div class="col-sm-6 col-md-5 col-md-offset-2 col-lg-6 col-lg-offset-0">
     <fieldset>
                    <legend>Dirección</legend>
                     <div class="form-group">
                        <select class="form-control" name="opcest"> 
                        <option>Selecciona un estado</option>
                        <?php 
                          foreach($es->result() as $row) {
                            echo "<option>";
                            echo $row -> nombre;
                            echo "</option>";
                          }
                            
                        ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <select class="form-control" name="opcmuni"> 
                        <option>Selecciona un municipio</option>
                            <?php 
                          foreach($muni->result() as $rowM) {
                            echo "<option>";
                            echo $rowM -> nombre;
                            echo "</option>";
                          }
                            
                        ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <input type="text" name="txtcolo" id="txtcolo" required="" placeholder="Colonia(*)" class="form-control" ng-model=formData.txtcolo> </div>
                    <div class="form-group">
                        <input type="text" name="txtcalle" id="txtcalle" required="" placeholder="Calle(*)" class="form-control" ng-model="formData.txtcalle"> </div>
                    <div class="form-group">
                        <input type="text" name="txtcp" id="txtcp" required="" placeholder="Codigo postal(*)" class="form-control" ng-model="formData.txtcp" maxlength="5"> </div>
                </fieldset>
    </div>
    
		
        
		
                 
	   <input type="submit" class="btn btn-success pull-right"  onclick="alertify.notify('!Exito¡','success',0, null);" value="Registrar" />
       <br> 
       <br>
	</form>
</div>