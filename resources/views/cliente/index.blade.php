


@extends('layouts.plantilla');

@section('css')

<!-- CSS DATATABLES -->
<link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css">

@endsection 

@section('contenido');

<div class="row">
    <div class="col-md-4">
            <a href="clientes/create" class="btn btn-success mt-4">
            <p class="h5">Agregar cliente
            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-person-plus" viewBox="0 0 16 16">
            <path d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H1s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C9.516 10.68 8.289 10 6 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"/>
            <path fill-rule="evenodd" d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z"/>
            </svg>
            </p>
            </a>
    </div>
    <div class="col-md-4">
            <h3>Seccion CLIENTES</h3>
    </div>
</div>

<br>
<br>

<table id="clientes" class="table table-success table-striped mt-3" >
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Nombre</th>
            <th scope="col">Imagen</th>
            <th scope="col">Cedula</th>
            <th scope="col">Correo</th>
            <th scope="col">Telefono</th>
            <th scope="col">Observaciones</th>
            <th scope="col">Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($clientes as $cliente)
        <tr>
           <td>{{$cliente->id}}</td>
           <td>{{$cliente->nombre}}</td>
           <td>{{$cliente->imagen}}</td>
           <td>{{$cliente->cedula}}</td>
           <td>{{$cliente->correo}}</td>
           <td>{{$cliente->telefono}}</td>
           <td>{{$cliente->observaciones}}</td>
           <td>
               <form action="{{route('clientes.destroy', $cliente->id)}}" method="POST">
               <a href="/clientes/{{$cliente->id}}/edit" class="btn btn-warning">Editar</a>
               <a href="/clientes/{{$cliente->id}}/"  class="btn btn-info">Detalles</a>
               @csrf
               @method('DELETE')
               <button type="submit"  class="btn btn-danger">Borrar</button>
               </form>
           </td>
        </tr>
        @endforeach
    </tbody>

</table>

<!-- CDN DATATABLES  -->
@section('js')
 <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
 <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
 <script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"></script>


 <!-- SACRIPT DATATABLES -->
<script>
    $(document).ready(function() {
    $('#clientes').DataTable({
        "lengthMenu": [[5,10,50,-1],[5,10,50, "All"]]
    });
} );
</script>

@endsection

@endsection