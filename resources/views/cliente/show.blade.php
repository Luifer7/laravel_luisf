



@extends('layouts.plantilla');


<!-- Vista para mostarr  detalles -->
@section('contenido');

<div class="row">
    <div class="col-md-4">
            <a href="/clientes" class="btn btn-success mt-4">
            <p class="h5">Ir a clientes
            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-person-plus" viewBox="0 0 16 16">
            <path d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H1s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C9.516 10.68 8.289 10 6 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"/>
            <path fill-rule="evenodd" d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z"/>
            </svg>
            </p>
            </a>
    </div>
    <div class="col-md-4">
        
          <h3>Detalles {{$cliente->nombre}}</h3>
    </div>
   
</div>

<br>
<br>
<div class="card">
    <div class="card-header">
        
      <h5>{{$cliente->imagen}}</h5>  
    </div>
    <div class="card-body">
    <h6>Nombre: <b>{{$cliente->nombre}}</b></h6>  
    <h6>Cedula: <b>{{$cliente->cedula}}</b></h6>  
    <h6>Correo: <b>{{$cliente->correo}}</b></h6> 
    <h6>Telefono: <b>{{$cliente->telefono}}</b></h6>   
    </div>
    <div class="card-footer">
    <h6>Tipo: <b>{{$cliente->tipo}}</b></h6>  
    <h6>Feccha de inicio: <b>{{$cliente->fechainicio}}</b></h6>  
    <h6>Fecha Final: <b>{{$cliente->fechafin}}</b></h6> 
    <h6>Observaciones: <b>{{$cliente->observaciones}}</b></h6>  
    </div>
</div>


@endsection