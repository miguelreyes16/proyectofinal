<?php
    include("../includes/cabeza-admin.php");
    include("../includes/pie-admin.php");
    include("../includes/db.php");
?>


<br>
 <div class="container container-1">
     <h1>Monta Cargas Camiones</h1>
     <br>

     <form action="guardar.php" method="POST">
         <div class="row">
             <div class="col-md-4">
                 <label class="labels" for="marca">Marca:</label>
                 <input id="inputs" required class="form-control" type="text" name="marca" placeholder="Marca">
             </div>
             <div class="col-md-4">
                 <label class="labels" for="modelo">Modelo:</label>
                 <input id="inputs" required class="form-control" type="text" name="modelo" placeholder="Modelo">
             </div>
             <div class="col-md-4">
                 <label class="labels" for="color">Color:</label>
                 <input id="inputs" required class="form-control" type="text" name="color" placeholder="Color">
             </div>
         </div>
         <br>
         <div class="row">
             <div class="col-md-6">
                 <label class="labels" for="marca">Comentario:</label>
                 <textarea id="inputs" required name="comentario" class="form-control" rows="10"></textarea>
             </div>
             <div class="col-md-2">
                 <label class="labels" for="cant">Cantidad Lavadoras:</label>
                 <input id="inputs" required class="form-control" type="text" name="cant" placeholder="Cant. Lavadoras">
             </div>
             <div class="col-md-2">
                 <label class="labels" for="color">Valor:</label>
                 <input id="inputs" required class="form-control" type="text" name="valor" placeholder="Valor">
             </div>
             <div class="col-md-2">
                 <label class="labels" for="peso">Peso:</label>
                 <input id="inputs" required class="form-control" type="text" name="peso" placeholder="Peso">
             </div>
         </div>
         <br>

         <div class="row">
             <div class="col-md-2">
             
                 <button type="submit" name="guardar" class="form-control btn btn-success btn-sm boton">Agregar</button>
             </div>

             <div class="col-md-2">
                 <button type="button"  id="limpiar" class="form-control btn btn-warning btn-sm boton">Limpiar</button>
             </div>

            

         </div>

     </form>





 </div>




