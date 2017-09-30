<div class="col-md-12">
    <section class="panel panel-featured panel-featured-primary">
        <header class="panel-heading">
            <h2 class="panel-title">Agregar Usuario</h2>
        </header>
        <ng-form id="Form" name="Form" ng-submit="submit()">
            <div class="panel-body">
                <div class="form-group">
                    <div ng-class="{ 'has-error' : Form.Nombre.$invalid && !Form.Nombre.$pristine }" class="col-md-3">
                        <label class="control-label" style="text-align: left;"><strong>*Nombre:</strong></label>
                        <input type="text" class="form-control" name="Nombre" id="Nombre"  placeholder="Nombre" ng-model="data.Nombre" required>
                        <p ng-show="Form.Nombre.$invalid && !Form.Nombre.$pristine" class="help-block">Ingrese Nombre.</p>
                    </div>
                </div>   
                <div class="form-group">
                    <div ng-class="{ 'has-error' : Form.Rif.$invalid && !Form.Rif.$pristine }" class="col-md-3">
                        <label class="control-label" style="text-align: left;"><strong>*Rif:</strong></label>
                        <input type="text" class="form-control" name="Rif" id="Rif"  placeholder="Rif" ng-model="data.Rif" required>
                        <p ng-show="Form.Rif.$invalid && !Form.Rif.$pristine" class="help-block">Ingrese Rif.</p>
                    </div>
                    <div ng-class="{ 'has-error' : Form.Email.$invalid && !Form.Email.$pristine }" class="col-md-3">
                        <label class="control-label" style="text-align: left;"><strong>*Email:</strong></label>
                        <input type="email" class="form-control" name="Email" id="Email" placeholder="Email"  ng-model="data.Email" required>
                        <p ng-show="Form.Email.$invalid && !Form.Email.$pristine" class="help-block">Ingrese Email.</p>
                    </div>
                    <div ng-class="{ 'has-error' : Form.Direccion.$invalid && !Form.Direccion.$pristine }" class="col-md-3">
                        <label class="control-label" style="text-align: left;"><strong>*Direccion:</strong></label>
                        <input type="text" class="form-control" name="Direccion" id="Direccion" placeholder="Direccion"  ng-model="data.Direccion" required>
                        <p ng-show="Form.Direccion.$invalid && !Form.Direccion.$pristine" class="help-block">Ingrese Direccion.</p>
                    </div>
                    <div ng-class="{ 'has-error' : Form.PersonaContacto.$invalid && !Form.PersonaContacto.$pristine }" class="col-md-3">
                        <label class="control-label" style="text-align: left;"><strong>*Persona de Contacto:</strong></label>
                        <input type="text" class="form-control" name="PersonaContacto" id="PersonaContacto" placeholder="Persona de Contacto"  ng-model="data.PersonaContacto" required>
                        <p ng-show="Form.PersonaContacto.$invalid && !Form.PersonaContacto.$pristine" class="help-block">Ingrese Persona de Contacto.</p>
                    </div>    
                </div>
                <div class="form-group">
                    <div class="col-md-4">
                        <button id="btn_modificar_usuario" type="submit" ng-click="submit()" ng-disabled="Form.$invalid" class="mb-xs mt-xs mr-xs btn btn-primary btn-block">Agregar Usuarios</button>
                    </div>
                </div>
            </div>
        </ng-form>
        <p>Los Campos que Poseen '*' Son Requeridos.</p>
    </section>
</div>
