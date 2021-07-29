@extends('layouts.app', ['page' => __('tareas'), 'pageSlug' => 'tareas'])

@section('content')
<div class="row">
  <div class="col-md-12">
    <div class="card ">
      <div class="card-header">
        <h4 class="card-title"> Tareas</h4>
        </div>
    <a href="{{ route('task.create') }}" class="btn btn-info btn-sm animation-on-hover" type="button">Crear</a>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table tablesorter " id="">
            <thead class=" text-primary">
              <tr>
                <th>
                  ID
                </th>
                <th>
                  Nombre
                </th>
                <th>
                  Descripción
                </th>
                <th class="text-center">
                  Opciones
                </th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>
                  Dakota Rice
                </td>
                <td>
                  Niger
                </td>
                <td>
                  Oud-Turnhout
                </td>
                <td class="text-center">
                    <button class="btn btn-primary btn-sm animation-on-hover" type="button">Editar</button>
                    <button class="btn btn-danger btn-sm animation-on-hover" type="button">Eliminar</button>
                </td>
              </tr>

            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
