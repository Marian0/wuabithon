@extends('dashboard.index')

@section('inner')
<div class="tab-content">
    <div class="tab-pane active">
          <div id="perfil" class="forms col-md-10 col-md-offset-1" style="padding-bottom:40px;">
            <div class="col-md-4">
              <img src="<?= asset('images/perfil2.jpg') ?>" style="width:170px"><br>
              <button type="button" class="btn btn-primary" style="width:170px;"><i class="material-icons">cloud_upload</i> DNI/Pasaporte</button><br>
              <button type="button" class="btn btn-primary" style="width:170px;"><i class="material-icons">cloud_upload</i> Avales</button><br>
              <button type="button" class="btn btn-primary" style="width:170px;"><i class="material-icons">history</i> Histórico</button><br>
              <button type="button" class="btn btn-primary" style="width:170px;"><i class="material-icons">account_balance_wallet</i> Crypto-wallet</button><br>
            </div>
            <div class="col-md-8">

              <div class="row">

      <div class="rating-block">
					<h4>Puntaje del usuario</h4>
					<h2 class="bold padding-bottom-7">4.3 <small>/ 5</small></h2>
				</div>
      </div>
      <div class= "row">


    <div >
      <h4>Rating</h4>
      <div class="">
        <div class="progress">
          <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40"
          aria-valuemin="0" aria-valuemax="100" style="width:100%">
            0 Falsos negativos
          </div>
        </div>
        <div class="progress">
          <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40"
          aria-valuemin="0" aria-valuemax="100" style="width:100%">
            0 Falsos positivos
          </div>
        </div>
        <div class="progress">
          <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40"
          aria-valuemin="0" aria-valuemax="100" style="width:90%">
            Perfil de pago
          </div>
        </div>
        <div class="progress">
          <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="40"
          aria-valuemin="0" aria-valuemax="100" style="width:60%">
            2 Denuncias
          </div>
        </div>
      </div>



    </div>
  </div>
            </div>
          </div>

    </div>





</div>
@stop
