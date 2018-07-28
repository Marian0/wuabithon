@extends('layout.app')

@section('content')
    <div class="wizard-container">
        <div class="card wizard-card" data-color="red" id="wizard">
            <form action="" method="">
                <!--        You can switch " data-color="blue" "  with one of the next bright colors: "green", "orange", "red", "purple"             -->

                <div class="wizard-header">
                    <h3 class="wizard-title">
                        Registrate!
                    </h3>
                    <h5>Llená el formulario y validá tus datos para crear tu cuenta.</h5>
                </div>
                <div class="wizard-navigation">
                    <ul>
                        <?php foreach ($tabs as $tab): ?>
                        <li><a href="#<?= $tab ?>" data-toggle="tab"><?= $tab ?></a></li>
                        <?php endforeach; ?>
                    </ul>
                </div>

                <div class="tab-content">
                    <?php foreach ($tabs as $tab): ?>
                    @include('register.tabs.' . $tab)
                    <?php endforeach; ?>
                </div>
                <div class="wizard-footer">
                    <div class="pull-right">
                        <input type='button' class='btn btn-next btn-fill btn-danger btn-wd' name='next' value='Siguiente' onclick="copiarDatos();"/>
                        <input type='button' class='btn btn-finish btn-fill btn-danger btn-wd' name='finish'
                               value='Terminar'/>
                    </div>
                    <div class="pull-left">
                        <input type='button' class='btn btn-previous btn-fill btn-default btn-wd' name='previous'
                               value='Anterior'/>

                        <div class="footer-checkbox">
                            <div class="col-sm-12">
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </form>
        </div>
    </div> <!-- wizard container -->
@stop

@section('scripts')
    <script>

      var nombreUser
      var dni;
      var telefono;
      var direccion;
      var email;
      var password;
        $(document).ready(function() {

        });
        function copiarDatos()
        {
          nombreUser = document.getElementById("nombreUser").value;
          dni = document.getElementById("dni").value;
          telefono = document.getElementById("telefono").value;
          direccion = document.getElementById("direccion").value;
          email = document.getElementById("email").value;

          document.getElementById("emailValidado").value = document.getElementById("email").value;
          document.getElementById("telefonoValidado").value = document.getElementById("telefono").value;
        }
    </script>
@stop
