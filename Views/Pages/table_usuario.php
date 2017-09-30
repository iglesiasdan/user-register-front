<!-- estos son usuarios -->
<section class="panel">
  <div class="panel-body">
    <div class="row">
      <div class="col-sm-6">
        <div class="mb-md">
          <button ui-sref="agregar_usuario" id="addUsuario" class="btn btn-primary boton">Agregar Nuevo Usuario <i class="fa fa-plus"></i></button>
        </div>
      </div>
    </div>
    <table class="table table-bordered table-striped mb-none" id="datatable-editable">
      <thead>
        <tr>
          <th hidden="true">id</th>
          <th>Nombre del Usuario</th>
          <th>Rif</th>
          <th>Email</th>
          <th>Direccion</th>
          <th>Persona de Contacto</th>
          <th>Accion</th>
        </tr>
      </thead>
      <tbody>
        <tr ng-repeat="post in posts">
          <td hidden="true">{{post.ID_usuario}}</td>
          <td>{{post.Nombre}}</td>
          <td>{{post.Rif}}</td>
          <td>{{post.Email}}</td>
          <td>{{post.Direccion}}</td>
          <td>{{post.PersonaContacto}}</td>
          <td>
            <a ui-sref="modificar_usuario({id_usuario: post.ID_usuario})"><i class="fa fa-pencil" data-toggle="tooltip" data-placement="bottom" title="Editar Usuario"></i></a>
            <a ui-sref="eliminar_usuario({id_usuario: post.ID_usuario, eliminar:1})"><i class="fa fa-trash" data-toggle="tooltip" data-placement="bottom" title="Eliminar Usuario"></i></a>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
</section>
