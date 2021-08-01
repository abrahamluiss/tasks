@extends('layouts.app', ['page' => __('tareas'), 'pageSlug' => 'tareas'])

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card ">
                <div class="card-header">
                    <h4 class="card-title"> Tareas</h4>

                </div>
                @if (session('notification'))
                    <div class="alert alert-success" role="alert">
                        {{ session('notification') }}
                    </div>
                @endif
                <a href="{{ route('task.create') }}" class="btn btn-info btn-sm animation-on-hover"
                    type="button">Crear</a>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table tablesorter " id="">
                            <thead class=" text-primary">
                                <tr>
                                    <th>
                                        ID
                                    </th>
                                    <th>
                                        Titulo
                                    </th>
                                    <th>
                                        Descripción
                                    </th>
                                    <th>
                                        Usuario
                                    </th>
                                    <th class="text-center">
                                        Opciones
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($tasks as $task)
                                    <tr>
                                        <td>
                                            {{ $task->id }}
                                        </td>
                                        <td>
                                            {{ $task->title }}
                                        </td>
                                        <td>
                                            {{ Str::limit($task->text, 10, '...') }}
                                            {{-- {{ $task->text }} --}}
                                        </td>
                                        <td>
                                            {{ $task->user->name }}
                                        </td>
                                        <td class="text-center">
                                            <a href="{{ route('task.show', $task->id) }}" class="btn btn-success btn-sm animation-on-hover"
                                                type="button">Detalle</a>
                                            <a href="{{ route('task.edit', $task->id) }}" class="btn btn-primary btn-sm animation-on-hover">Editar</a>
                                            <button class="btn btn-danger btn-sm animation-on-hover"
                                                type="button">Eliminar</button>
                                        </td>

                                    </tr>
                                @endforeach


                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
