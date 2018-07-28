@extends('dashboard.index')

@section('inner')
    <div class="tab-content">
        <div class="tab-pane active">
            <h4 class="info-text">Elegí el tipo de Póliza:</h4>
            <div class="row">
                <div class="col-sm-10 col-sm-offset-1">
                    <div class="col-sm-4">
                        <a class="choice"
                           data-form="inundacion"
                           data-toggle="wizard-radio" rel="tooltip" title=""
                             data-original-title="This is good if you travel alone.">
                            <input type="radio" name="job" value="Design">
                            <div class="icon">
                                <i class="material-icons">weekend</i>
                            </div>
                            <h6>Inundación Sequía</h6>
                        </a>
                    </div>
                    <div class="col-sm-4">
                        <a class="choice" data-toggle="wizard-radio" rel="tooltip" title=""
                             data-original-title="Select this room if you're traveling with your family.">
                            <input type="radio" name="job" value="Code" checked="checked">
                            <div class="icon">
                                <i class="material-icons">home</i>
                            </div>
                            <h6>Catastrófico</h6>
                        </a>
                    </div>
                    <div class="col-sm-4">
                        <a class="choice" data-toggle="wizard-radio" rel="tooltip" title=""
                             data-original-title="Select this option if you are coming with your team.">
                            <input type="radio" name="job" value="Code">
                            <div class="icon">
                                <i class="material-icons">business</i>
                            </div>
                            <h6>Ganadero</h6>
                        </a>
                    </div>
                </div>
            </div>
        </div>



        @include('dashboard.poliza_forms.inundacion-sequia')



    </div>
@stop

@section("scripts")


    <script>
        $(document).ready(function () {

            $(document).on('click', '.choice', function(event){
                event.preventDefault();

                $(".forms").hide();
                $("#" + $(this).attr('data-form')).fadeIn();


            })

        });
    </script>

@stop
