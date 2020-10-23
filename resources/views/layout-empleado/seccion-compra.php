
  <div class="table-wrapper">
    <div class="table-title">
      <div class="row">
        <div class="col-sm-6">
        <h3><b>Compra</b></h3>
     
        </div>
        <div class="col-sm-6">
          <a  href="insertar" class="btn btn-success" data-toggle="modal"> Agregar</a>
          <a href="reportes" class="btn btn-success" data-toggle="modal">Reportes</a>
          <input class="form-control" id="searchterm"     placeholder="Buscar..."/>  
        </div>
      </div>
    </div>
    <table class="table  table-responsive table-striped table-hover  ">
      <thead>
        <tr>
     
          <th scope="col">Id </th>
          <th scope="col">IdProducto</th>
          <th scope="col">Cantidad de productos</th>
          <th scope="col">IdEmpleado</th>
          <th scope="col">Acciones</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          
          <td data-label="Id">1</td>
          <td data-label="Nombre">1 </td>
          <td data-label="Modelo">20</td>
          <td data-label="Marca">1 </td>
          <td>
            <a  href="edit" class="edit" data-toggle="modal">Editar</a>
            <a href="#deleteEmployeeModal" class="delete" data-toggle="modal">Eliminar</a>
          </td>
        </tr>
      

      </tbody>
    </table>

  </div>
</div>


<div id="addEmployeeModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl">

  <div id="form-main">
  <div id="form-div">
    <form  class="clase">
    <h2>Agregar Compra</h2>
      <p >
  
        <input name="IdProducto" type="text" class="validate[required,custom[onlyLetter],length[0,100]] feedback-input" placeholder="IdProducto" id="IdProducto" />
      </p>
      <p >
        <input name="Cantidad de productos" type="number" class="validate[required,custom[onlyLetter],length[0,100]] feedback-input" id="Cantidad de productos" placeholder="Cantidad de productos" />
      </p>
      
      <p >
        <input name="IdEmpleado" class="validate[required,custom[onlyLetter],length[0,100]] feedback-input" id="IdEmpleado" placeholder="IdEmpleado"></input>
      </p>
    
      <div class="submit">
      <input type="submit" value="Cancelar" id="button-blue"/>
        <input type="submit" value="Aceptar" id="button-blue"/>
        <div class="ease"></div>
      </div>
    </form>
  </div>
  </div>
</div>
  </div>


<div id="editEmployeeModal" class="modal fade">
  <div class="modal-dialog">
   
  <div id="form-main">
  <div id="form-div">
    <form  class="clase">
    <h2>Editar Compra</h2>
    <p >
  
  <input name="IdProducto" type="text" class="validate[required,custom[onlyLetter],length[0,100]] feedback-input" placeholder="IdProducto" id="IdProducto" />
</p>
<p >
  <input name="Cantidad de productos" type="number" class="validate[required,custom[onlyLetter],length[0,100]] feedback-input" id="Cantidad de productos" placeholder="Cantidad de productos" />
</p>

<p >
  <input name="IdEmpleado" class="validate[required,custom[onlyLetter],length[0,100]] feedback-input" id="IdEmpleado" placeholder="IdEmpleado"></input>
</p>
      <div class="submit">
      <input type="submit" value="Cancelar" id="button-blue"/>
        <input type="submit" value="Aceptar" id="button-blue"/>
        <div class="ease"></div>
      </div>
    </form>
  </div>
  </div>
</div>
  </div>
</div>
<div id="deleteEmployeeModal" class="modal fade">
  <div class="modal-dialog">
    <div class="modal-content">
      <form >
        <div class="modal-header">
          <h4 class="modal-title">Eliminar Compra</h4>
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