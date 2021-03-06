@extends('layout.app')

@section('content')
    <div class="wizard-container">
        <div class="card wizard-card" data-color="red" id="wizard">

            <form action="./dashboard" method="post">

                {{ csrf_field() }}

                <div class="wizard-header">
                    <h3 class="wizard-title">
                        Identificación
                    </h3>
                </div>

                <div class="tab-content">
                    <div class="row">
                        <div class="col-sm-12">
                            <h4 class="info-text">
                                Ingrese su usuario y contraseña para continuar. Si no tenés cuenta podés
                                crearla
                                <a href="">haciendo click aquí</a>.
                            </h4>
                        </div>

                        <div class="col-sm-8 col-sm-offset-2">

                            <div class="input-group">
                                <span class="input-group-addon">
                                <i class="material-icons">email</i>
                                </span>
                                <div class="form-group label-floating">
                                    <label class="control-label">Email</label>
                                    <input name="email" type="email" autocomplete="off" class="form-control">
                                </div>
                            </div>

                            <div class="input-group">
                                <span class="input-group-addon">
                                <i class="material-icons">lock_outline</i>
                                </span>

                                <div class="form-group label-floating">
                                    <label class="control-label">Password</label>
                                    <input name="password" type="password" class="form-control">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="wizard-footer">
                    <div class="pull-right">

                        <button type="submit" class="btn btn-danger btn-wd" href="./dashboard">
                            <i class="material-icons">code</i>
                            Ingresar
                        </a>

                    </div>
                    <div class="pull-left">
                        <a class="btn btn-fill btn-wd" href="./register">
                            <i class="material-icons">code</i>
                            Crear cuenta
                        </a>

                    </div>
                    <div class="clearfix"></div>
                </div>

            </form>

        </div>
    </div>
@stop

@section('scripts')
    <script>
        $(document).ready(function () {

        });
    </script>
@stop
