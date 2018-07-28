@extends('layout.app')

@section('content')
    <div class="wizard-container">
        <div class="card wizard-card" data-color="red" id="wizard">

            <div class="wizard-header">
                <h3 class="wizard-title">
                    Bienvenido a Wuabi
                </h3>
            </div>

            <div class="tab-content">
                <div class="row">
                    <div class="col-sm-12">
                        <h4 class="info-text">
                            Ingrese su usuario y contraseña para continuar. Si no tenés cuenta podés
                            crearla
                            <a href="">haciendo click aquí</a>
                        </h4>
                    </div>
                    <div class="col-sm-6 col-sm-offset-3">

                        <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">email</i>
                        </span>
                            <div class="form-group label-floating">
                                <label class="control-label">Your Email</label>
                                <input name="name" type="text" class="form-control">
                            </div>
                        </div>

                        <div class="input-group">
                    <span class="input-group-addon">
                        <i class="material-icons">lock_outline</i>
                    </span>

                            <div class="form-group label-floating">
                                <label class="control-label">Your Password</label>
                                <input name="name2" type="password" class="form-control">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="wizard-footer">
                <div class="pull-right">

                    <a class="btn btn-danger btn-wd" href="./dashboard">
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


        </div>
    </div>
@stop

@section('scripts')
    <script>
        $(document).ready(function() {

        });
    </script>
@stop
