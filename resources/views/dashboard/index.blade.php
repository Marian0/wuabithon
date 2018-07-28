@extends('layout.app')

@section('width')
    col-md-12
@stop

<?php

$menu = [

    [
        'label' => 'Mis Pólizas',
        'route' => route('dashboard', ['section' => 'list'])
    ],
    [
        'label' => 'Crear Póliza',
        'route' => route('dashboard', ['section' => 'create'])
    ],
    [
        'label' => 'Declarar Activo',
        'route' => route('dashboard', ['section' => 'declare'])
    ],
    [
        'label' => 'Configuración',
        'route' => route('dashboard', ['section' => 'settings'])
    ],
    [
        'label' => 'Salir',
        'route' => route('welcome')
    ],

];
?>

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
                    <?php foreach($menu as $menu): ?>
                    <li><a href="<?= array_get($menu, 'route') ?>"><?= array_get($menu, 'label') ?></a></li>
                    <?php endforeach; ?>
                </ul>
            </div>


            @yield('inner')

        </div>
    </div>
@stop