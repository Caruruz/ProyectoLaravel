@extends('layouts.plantillabase')

@section('contenido')
<!-- <div class="shadow-lg p-3 mb-5 bg-white rounded"><h3>Contenido de INDEX</h3></div> -->
<a href="agregar" class="btn btn-primary">Nuevo</a>


<table class="table table-dark table-striped mt-4">
  <thead>
    <tr>
        <th scope="col">ID</th>
        <th scope="col">Nombre(S)</th>
        <th scope="col">Apellido</th>
        <th scope="col">Area de Trabajo</th>
        <th scope="col">Correo</th>
        <th scope="col">Telefono</th>
        <th scope="col">Acciones</th>
    </tr>
  </thead>
  <tbody>    
    @foreach ($empleados as $empleado)
    <tr>
        <td>{{$empleado->id}}</td>
        <td>{{$empleado->Nombre}}</td>
        <td>{{$empleado->PaternoApellido}}</td>
        <td>{{$empleado->AreaTrabajo}}</td>
        <td>{{$empleado->Correo}}</td>
        <td>{{$empleado->Telefono}}</td>
        <td>
         <form action="{{ route('empleados.destroy',$empleado->id) }}" method="POST">
          <a href="/empleados/{{$empleado->id}}/edit" class="btn btn-info">Editar</a>         
              @csrf
              @method('DELETE')
          <button type="submit" class="btn btn-danger">Delete</button>
         </form>          
        </td>        
    </tr>
    @endforeach
  </tbody>
</table>

@endsection
