@extends('layouts.plantillabase')

@section('contenido')
<h2>EDITAR EMPLEADO</h2>

<form action="/empleados/{{$empleado->id}}" method="POST">
    @csrf
    @method('PUT')
  <div class="mb-3">
    <label for="" class="form-label">Nombre(s)</label>
    <input id="nombre" name="nombre" type="text" class="form-control" value="{{$empleado->Nombre}}">    
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Apellido Paterno</label>
    <input id="apepaterno" name="apepaterno" type="text" class="form-control" value="{{$empleado->PaternoApellido}}">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Apellido Materno</label>
    <input id="apematerno" name="apematerno" type="text" class="form-control" value="{{$empleado->MaternoApellido}}">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Area de Trabajo</label>
    <input id="area" name="area" type="text" class="form-control" value="{{$empleado->AreaTrabajo}}">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Correo</label>
    <input id="correo" name="correo" type="text" class="form-control" value="{{$empleado->Correo}}">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Telefono</label>
    <input id="telefono" name="telefono" type="text" class="form-control" value="{{$empleado->Telefono}}">
  </div>
  <a href="/home" class="btn btn-secondary" tabindex="5">Cancelar</a>
  <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>
</form>

@endsection