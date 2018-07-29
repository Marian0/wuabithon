@extends('dashboard.index')

<?php

$data = [[
    'id' => 23,
    'type' => 'Inundación y Sequía',
    'zone' => 'Santa Fe',
    'ha' => 100,
    'cost' => 200,
    'prize' => 750000,
    'status' => 'Activo',
    'options' => '<i class="material-icons">
check_circle_outline
</i>',
]];

?>

@section('inner')
    <div class="col-md-12">

        <table class="table table-bordered">
            <thead>
            <tr>
                <th>#</th>
                <th>Tipo</th>
                <th>Activo</th>
                <th>Zona</th>
                <th>Ha</th>
                <th>Costo ($ARS)</th>
                <th>Premio ($ARS)</th>
                <th>Estado</th>
            </tr>
            </thead>


            <tbody>
            <?php foreach ($data as $d): ?>
            <tr>
                <?php foreach ($d as $a): ?>
                <td><?= $a ?></td>
                <?php endforeach; ?>
            </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </div>
@stop