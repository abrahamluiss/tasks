@extends('layouts.app', ['page' => __('tareas'), 'pageSlug' => 'tareas'])

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card ">
                <div class="card-header">
                    <h4 class="card-title"> Detalles</h4>
                </div>

                @if (session('notification'))
                    <div class="alert alert-danger" role="alert">
                        {{ session('notification') }}
                    </div>
                @endif
                <a href="{{ route('task.index') }}" class="btn btn-info btn-sm animation-on-hover" type="button">Atras</a>

                <div class="card">
                    <div class="card-body">

                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label> Titulo : {{ $task->title }}</label> <br>
                                    <label> Descripción : {{ $task->text }}</label> <br>
                                    <label> Usuario : {{ $task->user->name }}</label> <br>

                                </div>

                            </div>





                    </div>
                </div>


            </div>
        </div>
    </div>
@endsection
