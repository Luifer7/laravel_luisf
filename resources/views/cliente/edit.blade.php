


@extends('layouts.plantilla');



@section('contenido');

<!-- Vista de ediatr campos -->

<form  action="/clientes/{{$cliente->id}}" method="post">
    @csrf
    @method('PUT')

    <div class="row">

        <div class="col-md-6">
            
    
            <div class="card">

                <div class="card-header">
                    Editar Cliente
                </div>

                <div class="card-body">
                    <!-- nombre -->
                <div class="mb-3">
                <label class="form-label" for="nombre">Nombre</label>
                <input type="text" class="form-control" id="nombre" name="nombre" value="{{$cliente->nombre}}">
                </div>
                <!-- Imagen -->
                <div class="mb-3">
                <label class="form-label" for="nombre">Imagen</label>
                <input type="text" class="form-control" id="imagen" name="imagen" value="{{$cliente->imagen}}">
                </div>
                <!-- tipo bBasico y avanzado) -->
                <div class="mb-3">
                <label class="form-label" for="nombre">tipo</label>
                <input type="text" class="form-control" id="tipo" name="tipo" value="{{$cliente->tipo}}">
                </div>
                <!-- cedula -->
                <div class="mb-3">
                <label class="form-label" for="nombre">cedula</label>
                <input type="text" class="form-control" id="cedula" name="cedula" value="{{$cliente->cedula}}">
                </div>
                <!-- correo -->
                <div class="mb-3">
                <label class="form-label" for="nombre">Correo</label>
                <input type="text" class="form-control" id="correo" name="correo" value="{{$cliente->correo}}">
                </div>
                <!-- telefono -->
                <div class="mb-3">
                <label class="form-label" for="nombre">Telefono</label>
                <input type="text" class="form-control" id="telefono" name="telefono" value="{{$cliente->telefono}}">
                </div>
                <!-- fecha inicio -->
                <div class="mb-3">
                <label class="form-label" for="nombre">Fecha de inicio</label>
                <input type="text" class="form-control" id="fechainicio" name="fechainicio" value="{{$cliente->fechainicio}}">
                </div>
                <!-- fecha fin -->
                <div class="mb-3">
                <label class="form-label" for="nombre">Fecha de finalizacion</label>
                <input type="text" class="form-control" id="fechafin" name="fechafin" value="{{$cliente->fechafin}}">
                </div>
                <!-- observaciones -->
                <label class="form-label" for="nombre">Observaciones</label>
                <input type="text" class="form-control" id="observaciones" name="observaciones" value="{{$cliente->observaciones}}">
                </div>
                </div>
                
                <div class="card-footer">
                <div>
                    <a href="/clientes" class="btn btn-danger">Cancelar</a>
                    <button type="submit" class="btn btn-success">Guardar</button>
                </div>
                </div>
                
            </div>

        </div>
    
    </div>


</form>
 

@endsection