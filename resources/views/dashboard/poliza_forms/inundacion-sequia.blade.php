<style>
    #map {
        height: 400px;
    }
</style>

<div id="inundacion" class="forms col-md-12" style="display: none">


    <form action="">
        <div class="col-md-6">

            <h3>Completá el siguiente formulario</h3>
            <div class="form-group">
                <label for="">Producción a Cubrir</label>
                <select name="" id="" class="form-control">
                    <option value="" disabled selected>Seleccione cultivo</option>

                    <option value="">Maíz</option>
                    <option value="">Maíz Pisingallo</option>
                    <option value="">Trigo</option>
                    <option value="">Sorgo</option>
                    <option value="">Soja</option>
                    <option value="">Otros</option>


                </select>
            </div>
            <div class="form-group">
                <label for="">Zona</label>
                <input type="text" class="form-control">
            </div>

            <div class="form-group">
                <label for="">Hectáreas</label>
                <input type="number" class="form-control">
            </div>

        </div>

        <div class="col-md-6">
            <h3>Seleccione su lote</h3>
            <div id="map"></div>
        </div>


        <div class="col-md-12">
            <a href="" class="btn btn-success pull-right btn cotizar">Cotizar</a>
        </div>
    </form>
</div>