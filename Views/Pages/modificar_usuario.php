<div class="col-md-12">
               <section class="panel panel-featured panel-featured-primary">
                  <header class="panel-heading">
                     <h2 class="panel-title">Modificar Usuario</h2>
                  </header>
                  <ng-form id="Form" name="Form" ng-submit="submit()">
                     <div class="panel-body">
                     <div class="form-group">
                     <div ng-class="{ 'has-error' : Form.Nombre.$invalid && !Form.Nombre.$pristine }" class="col-md-3">
                        <label class="control-label" style="text-align: left;"><strong>*Nombre:</strong></label>
                        <input type="text" class="form-control" name="Nombre" id="Nombre"  placeholder="Nombre" ng-model="posts.Nombre" required>
                        <p ng-show="Form.Nombre.$invalid && !Form.Nombre.$pristine" class="help-block">Ingrese Nombre.</p>
                     </div>
                  </div>   
                  <div class="form-group">
                     <div ng-class="{ 'has-error' : Form.Rif.$invalid && !Form.Rif.$pristine }" class="col-md-3">
                        <label class="control-label" style="text-align: left;"><strong>*Rif:</strong></label>
                        <input type="text" class="form-control" name="Rif" id="Rif"  placeholder="Rif" ng-model="posts.Rif" required>
                        <p ng-show="Form.Rif.$invalid && !Form.Rif.$pristine" class="help-block">Ingrese Rif.</p>
                     </div>
                     <div ng-class="{ 'has-error' : Form.Email.$invalid && !Form.Email.$pristine }" class="col-md-3">
                        <label class="control-label" style="text-align: left;"><strong>*Email:</strong></label>
                        <input type="email" class="form-control" name="Email" id="Email" placeholder="Email"  ng-model="posts.Email" required>
                        <p ng-show="Form.Email.$invalid && !Form.Email.$pristine" class="help-block">Ingrese Email.</p>
                     </div>
                     <div ng-class="{ 'has-error' : Form.Direccion.$invalid && !Form.Direccion.$pristine }" class="col-md-3">
                        <label class="control-label" style="text-align: left;"><strong>*Direccion:</strong></label>
                        <input type="text" class="form-control" name="Direccion" id="Direccion" placeholder="Direccion"  ng-model="posts.Direccion" required>
                        <p ng-show="Form.Direccion.$invalid && !Form.Direccion.$pristine" class="help-block">Ingrese Direccion.</p>
                     </div>
                     <div ng-class="{ 'has-error' : Form.PersonaContacto.$invalid && !Form.PersonaContacto.$pristine }" class="col-md-3">
                        <label class="control-label" style="text-align: left;"><strong>*Persona de Contacto:</strong></label>
                        <input type="text" class="form-control" name="PersonaContacto" id="PersonaContacto" placeholder="Persona de Contacto"  ng-model="posts.PersonaContacto" required>
                        <p ng-show="Form.PersonaContacto.$invalid && !Form.PersonaContacto.$pristine" class="help-block">Ingrese Persona de Contacto.</p>
                     </div>
                     </div>
                     <div class="form-group">
                        <div class="col-md-4">
                           <button id="btn_modificar_usuario" type="submit" ng-click="submit()" ng-disabled="Form.$invalid" class="mb-xs mt-xs mr-xs btn btn-primary btn-block">Modificar Usuarios</button>
                        </div>
                     </div>


                    


                  </div>
                  </ng-form>
                  <div id="tanquesito" class="col-md-12">
               <section class="panel panel-featured panel-featured-primary">
                  <header class="panel-heading">
                     <h2 class="panel-title">Accesos del Usuario</h2>
                  </header>
                     <div class="panel-body">
                        <div class="form-group">
                            <div class="col-md-4">
                              <section class="panel panel-featured panel-featured-primary">
                                 <header class="panel-heading">
                                    <h2 class="panel-title">Selecionar Acceso</h2>
                                 </header>
                                 <div class="panel-body">
                                    <div class="form-group">
                                      <div class="form-group">
                                       <div class="col-sm-12">
                                          <select id="categoria_tipo" name="categoria_tipo" class="form-control mb-md" required required   ng-model="selectedAcceso" ng-options="post.NombreAccesso for post in post1 track by post.ID_accesos">
                                             <option value="">Crear Acceso</option>
                                          </select>
                                       </div>
                                    </div>
                                    </div>
                                 </div>
                              </section>
                        </div>
                        <div class="col-md-8">
                           <section class="panel panel-featured panel-featured-primary">
                              <header class="panel-heading">
                                 <h2 class="panel-title">Detalles del Acceso</h2>
                              </header>
                              
                                <div class="panel-body">
                                   <ng-form id="Form1" name="Form1" >
                                    <div class="form-group">
                                        <div ng-class="{ 'has-error' : Form1.NombreAccesso.$invalid && !Form1.NombreAccesso.$pristine }" class="col-sm-6">
                                        <label class="control-label" style="text-align: left;"><strong>*Nombre del Acceso:</strong></label>
                                        <input type="text" class="form-control" name="NombreAccesso" id="NombreAccesso" placeholder="Nombre Acceso" ng-model="selectedAcceso.NombreAccesso" required>
                                        <p ng-show="Form1.NombreAccesso.$invalid && !Form1.NombreAccesso.$pristine" class="help-block">Ingrese Nombre del Acceso.</p>
                                        </div>
                                    
                                    </div>
                                    <div class="form-group">
                                        <div ng-class="{ 'has-error' : Form1.Url.$invalid && !Form1.Url.$pristine }" class="col-sm-6">

                                        
                                        <label class="control-label" style="text-align: left;"><strong>URL:</strong></label>
                                        <input type="url" class="form-control" name="Url" id="Url" placeholder="URL" ng-model="selectedAcceso.Url" >
                                        <p ng-show="Form1.Url.$invalid && !Form1.Url.$pristine" class="help-block">Ingrese Url en el siguiente formato http://www.example.com.</p>
                                        </div>
                                    <div class="col-sm-6">
                                        <label class="control-label" style="text-align: left;"><strong>Contrasena:</strong></label>
                                        <input type="text" class="form-control" name="Contrasena" id="Contrasena" placeholder="Contrasena" ng-model="selectedAcceso.Contrasena" >
                                        
                                        </div>

                                    </div>
                                    <div class="form-group">
                                        <div class="col-md-12">
                                        <button id="btn_agregar_acceso" ng-disabled="Form1.$invalid" ng-click="submit2(selectedAcceso.ID_accesos)" type="submit" class="mb-xs mt-xs mr-xs btn btn-primary btn-block boton"><span>{{selectedAcceso.ID_accesos ? 'Modificar Acceso' : 'Guardar Acceso'}}</span></button>
                                        <a ui-sref="eliminar_acceso({id_usuario: selectedAcceso.ID_usuario ,id_acceso: selectedAcceso.ID_accesos, eliminar:2})"><i class="fa fa-trash" data-toggle="tooltip" data-placement="bottom" title="Eliminar Acceso"></i></a>
                                        </div>
                                    </div>
                                </ng-form>
                              </div>
                           </section>
                        </div>
                     </div>
                  </div>
                </section>
            </div>
                  <p>Los Campos que Poseen '*' Son Requeridos.</p>
               </section>
            </div>
