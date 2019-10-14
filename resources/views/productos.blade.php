<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', App()->getLocale()) }}">
 




<br>
<br>

  <ul class="list-group">
        @foreach ($catalogos as $catalogo)
            
      
          <li class="list-group-item d-flex justify-content-between align-items-center">
            {{$catalogo->nombre}}
            <span class="badge badge-primary badge-pill">0</span>
           
            <!--- INICIO DE ELEMENTOS MODAL-->
            <div class="panel-group">
                <div class="panel panel-default">
                  <div class="panel-heading">
                    <h4 class="panel-title">
                    <button class="btn btn-info" data-toggle="collapse" href="#{{$catalogo->nombre}}">Agregar1</button>
                    </h4>
                  </div>
                
                </div>
              </div>
            
          <!--FIN DE ELEMENTO MOAL-->
          </li>
          <form action="/nueva-tarea2/" method="POST">
            {{ csrf_field() }}
          <div id="{{$catalogo->nombre}}" class="panel-collapse collapse">
         

          <div class="col-xs-2">
              <label for="ex1">ID</label>
              <input value="{{$catalogo->id}}" class="form-control" id="id" name="id">
              
            </div>

              <div class="col-xs-2">
                  <label for="ex1">Nombre</label>
                  <input class="form-control" id="nombre" type="text" placeholder="Nombre producto" name="nombre">
                </div>
                <div class="col-xs-2">
                  <label for="ex2">Descripción</label>
                  <input class="form-control" id="descripcion" type="text" placeholder="Descripción producto" name="descripcion">
                </div>
                <div class="col-xs-2">
                  <label for="ex3">Precio</label>
                  <input class="form-control" id="precio" type="text" placeholder="Precio producto" name="precio">
                </div>
                <div class="form-group">
                    <label for="img" class="negrita">Selecciona una imagen:</label>
                    <div>
                        <input name="img" type="file" id="img" name="img"> 
                    </div>
                </div>

              
                <div class="col-xs-2">
                    <label for="ex3">Disponibilidad</label>
                    <input class="form-control" id="disponibilidad" type="text" placeholder="Disponibilidad del producto" name="disponibilidad">
                  </div>

                <br>
                <div>
                <button class="btn btn-danger" type="submit">Aceptar</button>
                </div>
                </div>
         
              </form>
          @endforeach
          

        </ul>
     
<br>
        <h3>Lista de productos</h3>
    <div  class="table-responsive">
    <table style="background:white;" class="table table-striped table-bordered table-hover">
            <thead class="thead-dark">
                <tr>
                    <th>Nombre</th>
                    <th >Descripción</th>
                    <th>Imagen</th>
                    <th>Precio</th>
                    <th>Disponibilidad</th>
                    <th>Creado</th>
                    <th>Actualizado</th>
                    <th>Operaciones</th>
                </tr>
            </thead>
            <tbody >
               
                    <tr >
                            @foreach($productos as $producto)
                            <td class="v-align-middle">{{$producto->nombre}}</td>
                            <td class="v-align-middle container">{{$producto->descripcion}}</td>
                            <td class="v-align-middle">{{$producto->img}}</td>
                            <td class="v-align-middle">{{$producto->precio}}</td>
                            <td class="v-align-middle">{{$producto->disponibilidad}}</td>
                            <td class="v-align-middle">{{$producto->created_at}}</td>
                            <td class="v-align-middle">{{$producto->updated_at}}</td>
                            <td class="v-align-middle">
                                <form action="/borrar/{{$producto->id}}" method="POST">
                                  @csrf
                                  @method('DELETE')
                                    <button class="btn btn-danger" type="submit">Borrar</button>
                                  </form> 
                            <button class="btn btn-info" type="submit">Editar</button>  
                     </tr>           
                            @endforeach
            </tbody>
        </table>

    </div>



</html>