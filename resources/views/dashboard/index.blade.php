@extends('layout.app')

@section('content')

    <div class="wizard-container">
        <div class="card wizard-card" data-color="red" id="wizard">


            <div class="wizard-header">
                <h3 class="wizard-title">
                    Dashboard
                </h3>
            </div>


            <div class="wizard-navgation">
                <ul>
                    <li><a href="">Mis Pólizas</a></li>
                    <li><a href="">Crear Póliza</a></li>
                    <li><a href="">Declarar Activo</a></li>
                    <li><a href="">Configuración</a></li>
                    <li><a href="./">Salir</a></li>
                </ul>
            </div>


            @yield('inner')

        </div>
    </div>
@stop