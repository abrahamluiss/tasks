@extends('layouts.app', ['page' => __('tareas'), 'pageSlug' => 'tareas'])

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card ">
                <div class="card-header">
                    <h4 class="card-title"> Actualiza Tarea con titulo {{ $task->title }}</h4>
                </div>

                @if (session('notification'))
                    <div class="alert alert-danger" role="alert">
                        {{ session('notification') }}
                    </div>
                @endif
                <a href="{{ route('task.index') }}" class="btn btn-info btn-sm animation-on-hover" type="button">Atras</a>

                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('task.update', $task->id) }}" method="post">
                            @method('PUT')
                            @csrf
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="inputTitle">Titulo</label>
                                    <input type="text" class="form-control" id="inputTitle" name="title"
                                        placeholder="Titulo de la tarea" value="{{ $task->title }}" required>
                                </div>

                            </div>
                            <div class="form-group">
                                <label for="txtAreaDescription">Descripción</label>
                                <textarea class="form-control" id="txtAreaDescription" name="text" rows="3"
                                    required>{{ $task->text }}</textarea>
                            </div>


                            <button type="submit" class="btn btn-primary">Actualizar</button>
                        </form>
                    </div>
                </div>


            </div>
        </div>
    </div>
@endsection
