<div class="tab-pane" id="<?= $tab ?>">
    <h4 class="info-text">Ingresá el código que enviamos a tu teléfono</h4>
    
    <div style="text-align: center">
        <img src="<?= asset('images/sms.png') ?>" style="width: 20%" alt="">
    </div>
    
    
    <div class="row">
        <div class="col-sm-8 col-sm-offset-2">
          <div class="input-group">
                        <span class="input-group-addon">
                          <i class="material-icons">verified_user</i>
                        </span>
              <div class="form-group label-floating">
                  <label class="control-label">Código</label>
                  <input id="codigo" name="codigo" type="text" class="form-control">
              </div>
          </div>
        </div>

    </div>
        <p style="text-align: center">El envío puede demorar algunos minutos.</p>
</div>
