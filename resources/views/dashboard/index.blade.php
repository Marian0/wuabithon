@extends('layout.app')

@section('width')
    col-md-12
@stop

<?php

$menu = [

    [
        'icon' => 'list',
        'label' => 'Mis Pólizas',
        'route' => route('dashboard', ['section' => 'list'])
    ],
    [
        'icon' => 'add',
        'label' => 'Crear Póliza',
        'route' => route('dashboard', ['section' => 'create'])
    ],
    [
        'icon' => 'account_box',
        'label' => 'Perfil Scoring',
        'route' => route('dashboard', ['section' => 'declare'])
    ],
    [
        'icon' => 'settings',
        'label' => 'Configuración',
        'route' => route('dashboard', ['section' => 'settings'])
    ],
    [
        'icon' => 'exit_to_app',
        'label' => 'Salir',
        'route' => route('welcome')
    ],

];
?>

@section('content')



    <div class="wizard-container dashboard-container">
        <div class="card wizard-card" data-color="red" id="wizard">


            <div class="wizard-header">
                <h3 class="wizard-title">
                    Sistema de Coberturas
                </h3>
            </div>


            <div class="wizard-navgation">
                <ul>
                    <?php foreach($menu as $menu): ?>
                    <li>
                        <a href="<?= array_get($menu, 'route') ?>">
                            <i class="material-icons"><?= array_get($menu, 'icon') ?></i>
                            <?= array_get($menu, 'label') ?></a>
                    </li>
                    <?php endforeach; ?>
                </ul>
            </div>


            @yield('inner')

            <div class="clearfix"></div>

        </div>
    </div>
@stop