
  <div class="table-wrapper">
    <div class="table-title">
      <div class="row">
        <div class="col-sm-6">
        <h3><b>Cliente</b></h3>
     
        </div>
        <div class="col-sm-6">
          <a href="insertar" class="btn btn-success" data-toggle="modal"> Agregar</a>
          <a href="reportes" class="btn btn-success" data-toggle="modal">Reportes</a>
          <input class="form-control" id="searchterm"     placeholder="Buscar..."/>  
        </div>
      </div>
    </div>
   <div class="table-responsive">
    <table class="table  ">
      <thead>
        <tr>
          <th scope="col">Id </th>
          <th scope="col">Codigo</th>
          <th scope="col">Nombre</th>
          <th scope="col">Apellido Paterno</th>
          <th scope="col">Apellido Materno</th>
          <th scope="col">RFC</th>
          <th scope="col">Codigo Postal</th>
          <th scope="col">Dirección</th>
          <th scope="col">Teléfono</th>
          <th scope="col">Imagen</th>    
          <th scope="col">Email</th>
          <th scope="col">Estatus</th>
          <th scope="col">Acciones</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          
          <td data-label="Id">1</td>
          <td data-label="Codigo">456</td>
          <td data-label="Nombre">Fatima</td>
          <td data-label="Apellido Paterno">Jimenez</td>
          <td data-label="Apellido Materno">Sandoval</td>
          <td data-label="RFC">DSFDFDFDSFDS</td>
          <td data-label="CodigoPostal">12354</td>
          <td data-label="Dirección">Templo del Campario</td>
          <td data-label="Teléfono">47756321489</td>
          <td data-label="Imagen">Imagen</td>
          <td data-label="CorreoElectronico">fatima<br>@gmail.com</td>
          <td data-label="Estatus">Activo</td>
 
          <td>
            <a  href="edit" class="edit" data-toggle="modal">Editar</a>
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
          <h4 class="modal-title">Eliminar Cliente</h4>
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