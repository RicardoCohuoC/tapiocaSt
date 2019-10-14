<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    @include('menu')

    <br>
    <br>
    <br>
    <body>
        <br>
        <h2 style="text-align: center;">Area de eventos</h2>
        
        <div class="container">
        <div class="col-xs-2">
                <label for="ex1">Nombre</label>
                <input class="form-control" id="nombre" type="text" placeholder="Nombre del evento" name="nombre">
              </div>
              <div class="col-xs-2">
                <label for="ex2">Descripción</label>
                <input class="form-control" id="descripcion" type="text" placeholder="Descripción del evento" name="descripcion">
              </div>
              <div class="col-xs-2">
                    <label for="ex2">Bases</label>
                    <input class="form-control" id="descripcion" type="textArea" placeholder="Bases del evento" name="descripcion">
                  </div>
            
              <div class="form-group">
                  <label for="img" class="negrita">Selecciona una imagen:</label>
                  <div>
                      <input name="img" type="file" id="img" name="img"> 
                  </div>
              </div>
              <button class="btn btn-danger" type="submit">Aceptar</button>
            </div>


            <br>
        <h3 style="text-align: center;">Lista de eventos</h3>
        <div class="table-responsive container">
                <table style="background:white;" class="table table-striped table-bordered table-hover">
                        <thead class="thead-dark">
                            <tr>
                                <th>Nombre</th>
                                <th >Descripción</th>
                                <th>Imagen</th>
                                <th>Bases</th>
                                <th>Valido</th>
                                <th>Creado</th>
                                <th>Actualizado</th>
                                <th>Operaciones</th>
                            </tr>
                        </thead>
                        <tbody >
                           <!--
                                <tr >
                                        
                                -->
                        </tbody>
                    </table>
            
                </div><!--fin de estructura tabla promociones-->
    </body>
</html>
