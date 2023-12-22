@extends('adminlte::page')

@section('title', 'Productos')

@section('content_header')
    <h1>Productos</h1>
@stop

@section('content')
    <p>Hola bienvenidos a la pagina de  regstro productos como bebidas o comida marina, comida rapida etc.</p>

    <h1>Registro de productos</h1>
    <form action="{{ url('carta.reg_productos') }}" method="POST">
        @csrf
        <div class="container mt-5">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">Registro de Producto</h5>
                </div>
                <div class="card-body">
                    <form>
                        <div class="form-group">
                            <label for="codigoProducto">Código del Producto</label>
                            <input type="text" class="form-control" id="codigoProducto" placeholder="Ingrese el código del producto">
                        </div>
                        <div class="form-group">
                            <label for="nombreProducto">Nombre del Producto</label>
                            <input type="text" class="form-control" id="nombreProducto" placeholder="Ingrese el nombre del producto">
                        </div>
                        <div class="form-group">
                            <label for="valorProducto">Valor del Producto</label>
                            <input type="text" class="form-control" id="valorProducto" placeholder="Ingrese el valor del producto">
                        </div>
                        <button type="submit" class="btn btn-primary">Registrar</button>
                    </form>
                </div>
            </div>
        </div>

    </form>

    <div class="accordion" id="accordionExample">
  <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
        Accordion Item #1
      </button>
    </h2>
    <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <strong>This is the first item's accordion body.</strong> It is shown by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
        Accordion Item #2
      </button>
    </h2>
    <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
        Accordion Item #3
      </button>
    </h2>
    <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
      </div>
    </div>
  </div>
</div>


    
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link href="{{ url('/assets/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ url('/assets/bootstrap/css/style.css') }}" rel="stylesheet">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop