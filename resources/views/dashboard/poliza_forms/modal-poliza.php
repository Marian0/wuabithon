<?php

$data = [[
    'id' => 23,
    'type' => 'Inundación y Sequía',
    'zone' => 'Santa Fe',
    'ha' => 100,
    'cost' => 200,
    'prize' => 750000,
    'status' => 'Activo',
    'options' => '',
]];

?>
<style>
    .modal-dialog {
        width: 90%;
    }
</style>
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel" style="border-bottom:0px">Confirmar poliza</h5>
      </div>
      <div class="modal-body">
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


<<<<<<< HEAD
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
=======
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

                <div class="clearfix"></div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal" style="margin-bottom: 0;">Cancelar</button>
                <button type="button" class="btn btn-primary" data-dismiss="modal">Confirmar</button>
            </div>
>>>>>>> 9eb1f600351984a03670498f5afe9947ee71415d
        </div>
      </div>
      <div class="modal-footer" style="border-top:0px">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-primary" data-dismiss="modal" style="back">Confirmar</button>
      </div>
    </div>
  </div>
</div>
