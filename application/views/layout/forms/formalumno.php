<div ng-app="formAlumno">
    <div ng-controller="MainCtrl">
        <div class="container">
            <br>
            <form name="formA" method="post" action="<?php echo site_url('C_alumno/add_alumno'); ?>">
            <div class="row">
                <div class="col-sm-6 col-md-5 col-md-offset-2 col-lg-6 col-lg-offset-0">
                    <fieldset id="infoP">
                        <legend>Informaci&oacute;n personal</legend>
                        <div class="form-group">
                            <input type="text" name="txtnom" id="txtnom" required="" class="form-control" placeholder="Nombre (*)" ng-model="formData.txtnom"> </div>
                        <div class="form-group">
                            <input type="text" name="txtapat" id="txtapat" required="" class="form-control" placeholder="Apellido paterno (*)" ng-model="formData.txtapat"> </div>
                        <div class="form-group">
                            <input type="text" name="txtamat" id="txtamat" required="" class="form-control" placeholder="Apellido materno (*)" ng-model="formData.txtamat"> </div>
                        <div class="form-group">
                            <input type="text" name="txtss" id="txtss" required="" class="form-control" placeholder="N° seguro social (*)" ng-model="formData.txtss" maxlength="12"> </div>
                    </fieldset>
                </div>
                    <div class="col-sm-6 col-md-5 col-md-offset-2 col-lg-6 col-lg-offset-0">
                    <fieldset id="Dir">
                        <legend>Dirección</legend>
                        <div class="form-group">
                            <select class="form-control" name="est">
                                <option>Selecciona un estado</option>
                                <?php 
                          foreach($es->result() as $row) {
                            echo "<option value=''>";
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
                </div>
<div class="col-sm-6 col-md-5 col-md-offset-2 col-lg-6 col-lg-offset-0">
                    <fieldset>
                        <legend>Informaci&oacute;n escolar</legend>
                        <div class="form-group">
                            <input type="text" name="txtmatri" id="txtmatri" required="" class="form-control" placeholder="Matricula (*)" ng-model="formData.txtmatri" maxlength="10"> </div>
                        <div class="form-group">
                            <select class="form-control" name="opcuni">
                                <option>Selecciona tu universidad</option>
                                <?php foreach ($uni->result() as $ro) {
                                    echo "<option value=".$ro -> id_universidad.">";
                                    echo  $ro -> nombre_universidad;
                                    echo "</option>";
                                }?>
                            </select>
                        </div>
                        <div class="form-group">
                            <select class="form-control" name="opccar">
                                <option>Selecciona la carrera que cursas</option>
                                <?php 
                                    foreach ($carr->result() as $co) {
                                        echo "<option value=".$co -> id_carrera.">";
                                        echo $co -> nivel.".".$co -> nombre_carrera;
                                         echo "</option>";
                                    }
                               ?>
                            </select>
                        </div>
                    </fieldset>
                </div>

                
                <div class="col-sm-6 col-md-5 col-md-offset-2 col-lg-6 col-lg-offset-0">
                    <fieldset id="contacto">
                        <legend>Informaci&oacute;n de contacto</legend>
                        <div class="form-group">
                            <input type="email" name="txtemail" id="txtemail" placeholder="example@email.com" required="" class="form-control" ng-model="formData.txtemail"> </div>
                        <div class="form-group">
                            <input type="text" placeholder="Teléfono (*)" name="txttel" id="txttel" placeholder="" maxlength="10" class="form-control" ng-model="formData.txttel"> </div>
                    </fieldset>
                </div>
                <br>
                <!--<input type="button" name="btn btn-success pull-right" value="Alertas bonitas" onclick="alertify.alert('Alerta','Estan bien monas').set('label', 'Aceptar');  ">-->
                <input type="submit" class="btn btn-success pull-right" value="Registrar" data-loading-text="registrando..."/> </form>
            <br>
            <br> </div>
    </div>
</div>