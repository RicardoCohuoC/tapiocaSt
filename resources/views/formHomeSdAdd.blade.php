<div class="col text-center">
        <div class="panel-group">
            <div class="panel panel-default">
              <div class="panel-heading">
                <h4 class="panel-title">
                <button class="btn btn-info" data-toggle="collapse" href="#nuevo">Agregar</button>
                </h4>
              </div>
            
            </div>
          </div>
    </div>
    <div id="nuevo" class="panel-collapse collapse"><!--inicio del collapse2-->
             
    
       
    
            <div class="col-xs-2">
                <label for="ex1">Titulo</label>
                <input class="form-control" id="nombre" type="text" placeholder="Tutulo de slider" name="titulo">
              </div>
              <div class="col-xs-2">
                <label for="ex2">Descripción</label>
                <textarea class="form-control" id="descripcion" type="text" placeholder="Descripción del slider" name="descripcion"></textarea>
              </div>
              <br>
              <div>
              <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <label class="input-group-text" for="inputGroupSelect01">Catalogo</label>
                  </div>
                  <select class="custom-select" id="inputGroupSelect01">
                    <option selected style="background: darkkhaki;">Selecciona un catalogo a presentar</option>
                   
                   @foreach ($catalogos as $catalogo)
                  <option value="{{$catalogo->id}}" id="" name="">{{$catalogo->nombre}}</option>
                   @endforeach
                 
                
                  </select>
                </div>

              </div>

                <br>

              <div class="col-xs-2">
                <label for="ex3">Texto Boton</label>
                <input class="form-control" id="txtbtn" type="text" placeholder="Texto btn" name="txtbtn">
              </div>
            
              <div class="form-group">
                  <label for="img" class="negrita">Selecciona una imagen</label>
                  <div>
                      <input name="img" type="file" id="img" name="img"> 
                  </div>
              </div>
  
    
              <br>
              <div>
              <button class="btn btn-danger" type="submit">Aceptar</button>
              </div>
    
    
              </div><!--fin del collapse2-->