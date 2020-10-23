
  <div class="table-wrapper">
    <div class="table-title">
      <div class="row">
        <div class="col-sm-6">
        <h3><b>Productos</b></h3>
     
        </div>
        <div class="col-sm-6">
       


          <a href="insertar"  class="btn btn-success" data-toggle="modal"> Agregar</a>
          <a href="reportes" class="btn btn-success" data-toggle="modal">Reportes</a>
          <input class="form-control" id="searchterm"     placeholder="Buscar..."/>  
        </div>
      </div>
    </div>
    <table class="table  table-responsive table-striped table-hover  ">
      <thead>
        <tr>
          <th scope="col">Id </th>
          <th scope="col">Nombre</th>
          <th scope="col">Modelo</th>
          <th scope="col">Marca</th>
          <th scope="col" >Categoría</th>
          <th scope="col">Existencia</th>
          <th scope="col">PrecioLista</th>
          <th scope="col" >Acciones</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          
          <td data-label="Id">1</td>
          <td data-label="Nombre">Xbox </td>
          <td data-label="Modelo">Xbox series X</td>
          <td data-label="Marca">Microsoft </td>
          <td data-label="Categoría">Consola</td>
          <td data-label="Existencia">Si</td>
          <td data-label="PrecioLista">103560</td>
        
          <td>
            <a href="edit" class="edit" data-toggle="modal">Editar</a>
            <a href="#deleteEmployeeModal" class="delete" data-toggle="modal">Eliminar</a>
          </td>
        </tr>
      

      </tbody>
      <tbody>
        <tr>
          
          <td data-label="Id">2</td>
          <td data-label="Nombre">Xbox </td>
          <td data-label="Modelo">Xbox series X</td>
          <td data-label="Marca">Microsoft </td>
          <td data-label="Categoría">Consola</td>
          <td data-label="Existencia">Si</td>
          <td data-label="PrecioLista">103560</td>
        
          <td>
            <a href="#editEmployeeModal" class="edit" data-toggle="modal">Editar</a>
            <a href="#deleteEmployeeModal" class="delete" data-toggle="modal">Eliminar</a>
          </td>
        </tr>
      

      </tbody>
    </table>

  </div>
</div>




<div id="editEmployeeModal" class="modal fade">
  <div class="modal-dialog">
   
  <div id="form-main">
  <div id="form-div">
    <form  class="clase">
    <h2>Editar Productos</h2>
      <p >
        <input name="Nombre" type="text" class="validate[required,custom[onlyLetter],length[0,100]] feedback-input" placeholder="Nombre" id="Nombre" />
      </p>
      <p >
        <input name="Modelo" type="text" class="validate[required,custom[onlyLetter],length[0,100]] feedback-input" id="Modelo" placeholder="Modelo" />
      </p>
      
      <p >
        <input name="Marca" class="validate[required,custom[onlyLetter],length[0,100]] feedback-input" id="Marca" placeholder="Marca"></input>
      </p>
      <p >
        <input name="Categoría" class="validate[required,custom[onlyLetter],length[0,100]] feedback-input" id="Categoría" placeholder="Categoría"></input>
      </p>
      <p >
        <input name="Existencia" class="validate[required,custom[onlyLetter],length[0,100]] feedback-input" id="Existencia" placeholder="Existencia"></input>
      </p>
      <p >
        <input name="PrecioLista" class="validate[required,custom[onlyLetter],length[0,100]] feedback-input" id="PrecioLista" placeholder="PrecioLista"></input>
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
          <h4 class="modal-title">Eliminar Productos</h4>
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