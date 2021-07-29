@extends('layouts.app', ['page' => __('tareas'), 'pageSlug' => 'tareas'])

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card ">
                <div class="card-header">
                    <h4 class="card-title"> Crea Tareas</h4>
                </div>

                @if (session('notification'))
                    <div class="alert alert-danger" role="alert">
                        {{ session('notification') }}
                    </div>
                @endif
                <a href="{{ route('task') }}" class="btn btn-info btn-sm animation-on-hover" type="button">Atras</a>

                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('task.store') }}" method="post">
                            @method('POST')
                            @csrf
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="inputTitle">Titulo</label>
                                    <input type="text" class="form-control" id="inputTitle" name="title"
                                        placeholder="Titulo de la tarea" required>
                                </div>

                            </div>
                            <div class="form-group">
                                <label for="txtAreaDescription">Descripción</label>
                                <textarea class="form-control" id="txtAreaDescription" name="text" rows="3"
                                    required></textarea>
                            </div>


                            {{-- <div class="form-group">
              <div class="form-check">
                <label class="form-check-label">
                    <input class="form-check-input" type="checkbox" value="">
                    Check me out
                    <span class="form-check-sign">
                      <span class="check"></span>
                    </span>
                </label>
              </div>
            </div> --}}
                            <button type="submit" class="btn btn-primary">Guardar</button>
                        </form>
                    </div>
                </div>


            </div>
        </div>
    </div>
@endsection
