@extends('adminlte::page')

@section('title', 'Productos')

@section('content_header')
    <h1>NUESTRA CARTA</h1>
@stop

@section('content')



<!-- acordion  -->
<div class="accordion" id="accordionExample">

    <!-- DESAYUNOS -->
  <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
        <strong>Desayunos</strong>
      </button>
    </h2>
    <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
      <div class="accordion-body">

        <!-- contenido de desayunos  -->
        <div class="card-body">
            <div class="row">
                @foreach($productos as $producto)
                    <div class="col-md-4">
                        <div class="card">
                        <img src="data:image/png;base64,{{ base64_encode($producto->imagen) }}" alt="Imagen del Producto">
                            <div class="card-body">
                                <h5 class="card-title"><strong>{{ $producto->nombre }}</strong></h5>
                                <p class="card-text">{{ $producto->descripcion }}</p>
                                <p class="card-text"><strong>Precio:</strong> ${{ $producto->precio }}</p>
                                <div>
                                  <button type="submit" class="btn btn-custom">
                                    Agregar al Carrito
                                    <i class="fas fa-shopping-cart"></i>
                                  </button>
                                </div>                           
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    </div>
  </div>

  <!-- ENSALADA DE FRUTAS -->
  <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
        <STRONG>Ensaladas de Frutas</STRONG>
      </button>
    </h2>
    <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">

      <!-- contenido ensalada de frutas  -->
      <div class="card-body">
            <div class="row">
                @foreach($productos_frutas as $producto_frutas)
                    <div class="col-md-4">
                        <div class="card">
                        <img src="data:image/png;base64,{{ base64_encode($producto_frutas->imagen) }}" alt="Imagen del Producto">
                            <div class="card-body">
                                <h5 class="card-title"><strong>{{ $producto_frutas->nombre }}</strong></h5>
                                <p class="card-text">{{ $producto_frutas->descripcion }}</p>
                                <p class="card-text"><strong>Precio:</strong> ${{ $producto_frutas->precio }}</p>
                                <div>
                                  <button type="submit" class="btn btn-custom">
                                    Agregar al Carrito
                                    <i class="fas fa-shopping-cart"></i>
                                  </button>
                                </div>                           
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
  </div>



    <!-- CAFE   -->
  <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
            <strong>Café</strong>
      </button>
    </h2>
    <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
      <div class="accordion-body">
          <!-- contenido de cafe  -->
        <div class="card-body">
            <div class="row">
                @foreach($productos_cafe as $producto_cafe)
                    <div class="col-md-4">
                        <div class="card">
                        <img src="data:image/png;base64,{{ base64_encode($producto_cafe->imagen) }}" alt="Imagen del Producto">
                            <div class="card-body">
                                <h5 class="card-title"><strong>{{ $producto_cafe->nombre }}</strong></h5>
                                <p class="card-text">{{ $producto_cafe->descripcion }}</p>
                                <p class="card-text"><strong>Precio:</strong> ${{ $producto_cafe->precio }}</p>
                                <div>
                                  <button type="submit" class="btn btn-custom">
                                    Agregar al Carrito
                                    <i class="fas fa-shopping-cart"></i>
                                  </button>
                                </div>                           
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
      </div>
    </div>
  </div>


  
  <!-- ENTRADAS -->
  <div class="accordion-item">
        <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEntradas" aria-expanded="false" aria-controls="collapseEntradas">
                <strong>Entradas</strong>
            </button>
        </h2>
        <div id="collapseEntradas" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
            <div class="accordion-body">
                <!-- contenido de entradas  -->
                <div class="card-body">
                    <div class="row">
                        @foreach($productos_entradas as $producto_entradas)
                            <div class="col-md-4">
                              <div class="card">
                              <img src="data:image/png;base64,{{ base64_encode($producto_entradas->imagen) }}" alt="Imagen del Producto">
                                <div class="card-body">
                                    <h5 class="card-title"><strong>{{ $producto_entradas->nombre }}</strong></h5>
                                    <p class="card-text">{{ $producto_entradas->descripcion }}</p>
                                    <p class="card-text"><strong>Precio:</strong> ${{ $producto_entradas->precio }}</p>
                                    <div>
                                      <button type="submit" class="btn btn-custom">
                                        Agregar al Carrito
                                        <i class="fas fa-shopping-cart"></i>
                                      </button>
                                    </div>                           
                                </div>
                              </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>





    
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link rel="stylesheet" href="{{ asset('bootstrap/css/style.css') }}">
    <link href="{{ url('/assets/bootstrap/css/bootstrap.min.css') }}"rel="stylesheet">
    <link href="{{ url('/assets/bootstrap/css/style.css') }}"rel="stylesheet">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
    <script type="text/javascript" src="{{ url('/assets/bootstrap/js/bootstrap.min.js') }}"></script>
@stop