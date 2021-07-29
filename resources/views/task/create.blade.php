@extends('layouts.app', ['page' => __('tareas'), 'pageSlug' => 'tareas'])

@section('content')
<div class="row">
  <div class="col-md-12">
    <div class="card ">
      <div class="card-header">
        <h4 class="card-title"> Crea Tareas</h4>
        </div>
    <a href="{{ route('task') }}" class="btn btn-info btn-sm animation-on-hover" type="button">Atras</a>

    <div class="card">
        <div class="card-body">
          <form>
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="inputEmail4">Titulo</label>
                <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
              </div>

            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Descripción</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
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
