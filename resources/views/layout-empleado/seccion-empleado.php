
  <div class="table-wrapper">
    <div class="table-title">
      <div class="row">
        <div class="col-sm-6">
        <h3><b>Empleados</b></h3>
     
        </div>
        <div class="col-sm-6">
          <a class="btn btn-success"  href="insertar" > Agregar</a>
          <a  href="reportes" class="btn btn-success">Reportes</a>
          <input class="form-control" id="searchterm"     placeholder="Buscar..."/>  
        </div>
      </div>
    </div>
    <table class="table  table-responsive table-striped table-hover  ">
      <thead>
        <tr>
          <th scope="col">Id </th>
          <th scope="col">Codigo</th>
          <th scope="col">Puesto</th>
          <th scope="col">Nombre</th>
          <th scope="col" >Apellido Paterno</th>
          <th scope="col">Apellido Materno</th>
          <th scope="col">Teléfono</th>
          <th scope="col">Fecha Nacimiento</th>
          <th scope="col" >Domicilio</th>
          <th scope="col">Nombre Usuario</th>
          <th scope="col">Contraseña</th>
          <th scope="col" >Acciones</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          
          <td data-label="Id">1</td>
          <td data-label="Codigo">456</td>
          <td data-label="Puesto">Administrador</td>
          <td data-label="Nombre">Fatima</td>
          <td data-label="Apellido Paterno">Jimenez</td>
          <td data-label="Apellido Materno">Sandoval</td>
          <td data-label="Teléfono">47756321489</td>
          <td data-label="Fecha Nacimiento">24 de enero del 200</td>
          <td data-label="Domicilio">Templo del Campario</td>
          <td data-label="Nombre Usuario">Yuki</td>
          <td data-label="Contraseña">admin</td>
          <td>
            <a href="edit" class="edit" data-toggle="modal">Editar</a>
            <a href="#deleteEmployeeModal" class="delete" data-toggle="modal">Eliminar</a>
  
          </td>
        </tr>
      

      </tbody>
    </table>

  </div>
</div>

<div id="deleteEmployeeModal" class="modal fade">
  <div class="modal-dialog">
    <div class="modal-content">
      <form >
        <div class="modal-header">
          <h4 class="modal-title">Eliminar Empleados</h4>
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        </div>
        <div class="modal-body">
          <p>¿Está seguro de que desea eliminar este registro?</p>
          <p class="text-warning"><small>Esta acción no se puede deshacer.</small></p>
        </div>
        <div class="modal-footer">
          <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
          <input type="submit" class="btn btn-danger" value="Delete">
        </div>
      </form>
    </div>
  </div>
</div>