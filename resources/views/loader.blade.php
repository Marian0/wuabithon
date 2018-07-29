<style>
    #loadingWrapper {
        position: absolute;
        width: 100%;
        height: 50px;
        line-height: 50px;
        top: 50%;
    }
    .loadingContainer {
        background: #ffeb00;
        width: 200px;
        margin: 0 auto;
        height: 100%;
        border-radius: 200px;
        text-align: center;
    }
    #spinloader {
        border: 3px solid #fff;
        border-top: 3px solid #1e2834;
        border-radius: 50%;
        height: 30px;
        width: 30px;
        animation: spin 2s linear infinite;
        float: left;
        margin: 10px 0 0 25px;
    }
</style>

<div id="loadingWrapper" style="display: none">
    <div class="loadingContainer">
        <div id="spinloader"></div>
        <div class="labelloading">
            Cargando...
        </div>
    </div>
</div>

<script>

    function showLoader() {
        var x = document.getElementById("loadingWrapper");
        x.style.display = "block";
    }

    function hideLoader() {
        var x = document.getElementById("loadingWrapper");
        x.style.display = "none";
    }

</script>