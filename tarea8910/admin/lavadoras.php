<?php
    include("../includes/cabeza-admin.php");
    include("../includes/pie-admin.php");
    include("../includes/db.php");
?>



<br>
<div class="container container-1">

    <h1>Monta Cargas Lavadoras</h1>
    <br>

    <form action="guardar-lav.php" method="POST">
    <div class="row">
        <div class="col-md-4">
            <label class="labels" for="codigo">Código:</label>
            <input id="inputs" required class="form-control" type="text" name="codigo" placeholder="Código">
        </div>
        <div class="col-md-4">
            <label class="labels" for="marca">Marca:</label>
            <input id="inputs" required class="form-control" type="text" name="marca" placeholder="Marca">
        </div>
        <div class="col-md-4">
            <label class="labels" for="modelo">Modelo:</label>
            <input id="inputs" required class="form-control" type="text" name="modelo" placeholder="Modelo">
        </div>
    </div>
    <br>

    <div class="row">
        <div class="col-md-4">
            <label class="labels" for="valor">Valor:</label>
            <input id="inputs" required class="form-control" type="text" name="valor" placeholder="Valor">
        </div>
        <div class="col-md-4">
            <label class="labels" for="peso">Peso Libs:</label>
            <input id="inputs" required class="form-control" type="text" name="peso" placeholder="Peso">
        </div>
        <div class="col-md-4">
            <label class="labels" for="peso">Id Camión:</label>
            <input id="inputs" required class="form-control" type="text" name="id_camion" placeholder="Ingrese el id del camión">
        </div>
    </div>

    <br>

    <div class="row">
        <div class="col-md-2">
            <button type="submit" name= "guardar "class="form-control btn btn-success btn-sm boton">Agregar</button>
        </div>

        <div class="col-md-2">
            <button type="reset" id="limpiar" class="form-control btn btn-warning btn-sm boton">Limpiar</button>
        </div>


    </div>

    </form>

</div>