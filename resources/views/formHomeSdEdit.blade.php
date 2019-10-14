
<html lang="{{ str_replace('_', '-', App()->getLocale()) }}">

@if(count($sliders)>0)
<div class="container row" >
<button class="btn btn-info text-center" data-toggle="collapse" href="#{{$slider->img}}">Editar</button>

<form action="/eliminas/{{$slider->id}}" method="DELETE">
  {!! csrf_field() !!}
    <button class="btn btn-danger" type="submit">Borrar</button>
</form>
</div>
<!--inicio de la seccion edicion-->
{{ csrf_field() }}
<div id="{{$slider->img}}" class="panel-collapse collapse">


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
</div>

@else

@endif
<!--fin de la estructura edicion-->
