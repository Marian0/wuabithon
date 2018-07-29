@extends('dashboard.index')

@section('inner')

    <div class="col-md-8 col-md-offset-2">

        <div class="form-group">
            <label for="">Email</label>
            <input type="text" value="mariano@wuabi.com" class="form-control">
        </div>

        <div class="form-group">
            <label for="">Clave</label>
            <input type="password" value="2222"  class="form-control">
        </div>


        <a href="" class="btn btn-success pull-right">Guardar</a>
    </div>

@stop