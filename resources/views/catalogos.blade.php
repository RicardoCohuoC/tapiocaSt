<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', App()->getLocale()) }}">
    @include('menu')
    <body style="background:#ECEBCE ;">
<div >
        <br>
          <br>
          <br>
          <br>


           
    <div class="row container">
  <div class="col-2">
    <div class="list-group" id="list-tab" role="tablist">
      <a class="list-group-item list-group-item-action active" id="list-home-list" data-toggle="list" href="#list-home" role="tab" aria-controls="home">Catálogo</a>
      <a class="list-group-item list-group-item-action" id="list-profile-list" data-toggle="list" href="#list-profile" role="tab" aria-controls="profile">Productos</a>
      
    </div>
  </div>
  <div class="col-10">
    <div class="tab-content" id="nav-tabContent">
      <div class="tab-pane fade show active" id="list-home" role="tabpanel" aria-labelledby="list-home-list"><!--Catalogo-->
        <div class="container">


                <!-- Button trigger modal -->
              
                @if(count($errors) > 0)
                <div class="alert alert-danger">
                  <ul>
                  @foreach($errors->all() as $error)
                    <li>Complete los campos solicitados::</li>
                  @endforeach
                  </ul>
                </div>
              @endif
                   <!-- Modal -->
                   <form action="/nueva-tarea/" method="POST" class="form-inline align-items-center justify-content-center">
                    {{ csrf_field() }}
                      <div class="form-group mx-sm-3 mb-2">
                       
                      </div>
                      <br>
                    <div style="text-align: center;" class="Row col-12">
                      <h2>Administra tus catálogos</h2>
                    </div>
                  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" >Crear nuevo Catálogo</button>
                  
                  
                  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">Nuevo catálogo</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <form>
                            <div class="form-group">
                              <label for="recipient-name" class="col-form-label">Nombre catálogo</label>
                              <input type="text" class="form-control" id="nombre" name="nombre">
                            </div>
                            <div class="form-group">
                              <label for="message-text" >Descripción catálogo</label>
                              <textarea style="justify-content: space-around;"class="form-control" id="descripcion" name="descripcion"></textarea>
                            </div>
        
                            <div class="form-group">
                                    <label for="img" class="negrita">Selecciona una imagen:</label>
                                    <div>
                                        <input name="img" type="file" id="img"> 
                                    </div>
                                </div>
        
        
                          </form>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Salir</button>
                          
                          
                          <button type="submit" class="btn btn-success mb-2">Aceptar</button>
                        </form>
                        </div>
                    
                    </div>
                </div>
            </div>
        </div><!--fin de elemento modal-->
        <br>
               <!--seccion de tabla de contenido-->
               <div class="form-group mx-sm-3 mb-2">      
<!--FIN DE  Button trigger modal -->
@if(count($catalogos) > 0)

<div class="table-responsive">
<table style="background:white;" class="table table-striped table-bordered table-hover">
        <thead class="thead-dark">
            <tr>
                <th>Nombre</th>
                <th class="container">Descripciòn</th>
                <th>Imagen</th>
                <th>Creado</th>
                <th>Actualizado</th>
                <th>Operaciones</th>
            </tr>
        </thead>
        <tbody >
           
                <tr >
                        @foreach($catalogos as $catalogo)
                        <td class="v-align-middle">{{$catalogo->nombre}}</td>
                        <td class="v-align-middle container">{{$catalogo->descripcion}}</td>
                        <td class="v-align-middle">{{$catalogo->img}}</td>
                        <td class="v-align-middle">{{$catalogo->created_at}}</td>
                        <td class="v-align-middle">{{$catalogo->updated_at}}</td>
                        <td class="v-align-middle">


                          
                            
                                <form action="/elimina/{{$catalogo->id}}" method="POST">
                                  @csrf
                                  @method('DELETE')
                                    <button class="btn btn-danger" type="submit">Borrar</button>
                                  </form>
                                <button class="btn btn-info" type="submit">Editar</button>  
                        </tr>           
            @endforeach
        </tbody>
    </table>
@endif
</div>

 
</div><!--fin de row-->
    
</div><!--fin de catalogo-->
      <div class="tab-pane fade"   id="list-profile" role="tabpanel" aria-labelledby="list-profile-list">
        
          
        @include('productos')</div>


    </div>
  

 
          
                

          

      
      




     
    </body>

</html>
