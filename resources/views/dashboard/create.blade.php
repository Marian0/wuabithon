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
                              <img style="width: 30px; padding-top: 40px;" src="<?= asset('images/flood.svg') ?>"/>
                              <img style="width: 30px; padding-top: 40px;" src="<?= asset('images/sun.svg') ?>"/>
                            </div>


                            <h6>Inundación Sequía</h6>
                        </a>
                    </div>
                    <div class="col-sm-4">
                        <a class="choice" data-toggle="wizard-radio" rel="tooltip" title=""
                             data-original-title="Select this room if you're traveling with your family.">
                            <input type="radio" name="job" value="Code" checked="checked">
                            <div class="icon">
                                <img style="width: 40px; padding-top: 35px;" src="<?= asset('images/hurricane.svg') ?>"/>
                            </div>
                            <h6>Catastrófico</h6>
                        </a>
                    </div>
                    <div class="col-sm-4">
                        <a class="choice" data-toggle="wizard-radio" rel="tooltip" title=""
                             data-original-title="Select this option if you are coming with your team.">
                            <input type="radio" name="job" value="Code">
                            <div class="icon">
                                <img style="width: 40px; padding-top: 35px;" src="<?= asset('images/cow.svg') ?>"/>
                            </div>
                            <h6>Ganadero</h6>
                        </a>
                    </div>


                </div>
            </div>


        </div>

        <hr>

        @include('dashboard.poliza_forms.inundacion-sequia')
        @include('dashboard.poliza_forms.modal-poliza')



    </div>
@stop

@section("scripts")


    <script>

        function initMap() {
            var map = new google.maps.Map(document.getElementById('map'), {
                center: {lat: -31.6318439, lng: -60.7167267},
                zoom: 15
            });

            var bounds = {
                north:  -31.630,
                south: -31.635,
                east: -60.710,
                west: -60.723
            };

            // Define a rectangle and set its editable property to true.
            var rectangle = new google.maps.Rectangle({
                bounds: bounds,
                editable: true
            });
            rectangle.setMap(map);
        }


        $(document).ready(function () {

            $(document).on('click', '.choice', function(event){
                event.preventDefault();

                $(".forms").hide();
                $("#" + $(this).attr('data-form')).fadeIn();


            });

            // This example adds a user-editable rectangle to the map.


        });

        $(document).on('click', '.cotizar', function(event) {

            event.preventDefault();

            showLoader();

            setTimeout(function(){
                hideLoader();

                confirm("seguro?");

            }, 2000);

        });


    </script>
    <script async defer
            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBxeaMi4iI-IQrv3hxIBA7HVzW7PfUI-VY&callback=initMap">
    </script>

@stop
