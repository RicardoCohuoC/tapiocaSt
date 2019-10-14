<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<link href="https://fonts.googleapis.com/css?family=Philosopher:700&display=swap" rel="stylesheet"> 
@include('menu')
    <body>
<br>
<br>
<br>
<br>
<div class="container">
<h3 style="text-align: center;font-family: 'Philosopher', sans-serif;font-size: 40px;font-weight: 600;">Edicion de slider</h3>
</div>
<br>
<div class="container"><button class="btn btn-info text-center" data-toggle="collapse" href="#slider">Editar</button></div>
<br>
<br>
<div id="slider" class="container panel-collapse collapse"><!--div de contenido Slider-->

<!--estructura de Edicion Slider INICIO-->


@if(count($sliders) > 0)
<ul style="column-count: 2; align-content: center;">
@foreach ($sliders as $slider)
{{ csrf_field() }}
  
    <div class="card-deck">
      
        <div class="card border-primary ">
          <img src="https://ep01.epimg.net/elcomidista/imagenes/2019/07/20/articulo/1563631201_757595_1563636035_noticia_normal.jpg" class="card-img-top" alt="..." sizes="(min-width: 600px) 200px, 20vw">
          <div class="card-body">
          <h5 class="card-title">{{$slider->titulo}}</h5>
          <p class="card-text">{{$slider->info}}</p>
          @include('formHomeSdEdit')
          </div>
        </div>
      </div> 
  
     
      

@endforeach


</ul>
<br>
@include('formHomeSdAdd')
@else
@include('formHomeSdAdd')

@endif

</div>


<hr>
<!--fin de estructura de edicion Slider-->


        <div>
          <h2 style="text-align: center;font-family: 'Philosopher', sans-serif;">Area de info</h2>

        </div>
<br>
<hr>
        <div>
            <h2 style="text-align: center;font-family: 'Philosopher', sans-serif;">Area mapa</h2>
  
          </div>
        <hr>
    </body>
</html>
