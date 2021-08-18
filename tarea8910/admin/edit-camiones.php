<?php
    include("../includes/cabeza-admin.php");
    include("../includes/pie-admin.php");
    require("../includes/db.php");

    
    if(isset($_GET['id_camion'])){
        $id_camion = $_GET ['id_camion'];
        $query = "SELECT *FROM camiones WHERE id_camion= '$id_camion'" ; 
        $res= mysqli_query($conn,$query);
        if(!empty($res)AND(mysqli_num_rows($res)==1)){
           
            $row = mysqli_fetch_array($res);
            $marca= $row['marca'];
            $modelo= $row['modelo'];
            $color = $row['color'];
            $comentario= $row['comentario'];
            $cant= $row['cant'];
            $valor= $row['valor'];
            $peso= $row['peso'];
        }
    }  



    if(isset($_POST['edit'])){
        $id_camion= $_GET ['id_camion'];
        $marca= $_POST['marca'];
        $modelo= $_POST['modelo'];
        $color= $_POST['color'];
        $comentario= $_POST['comentario'];
        $cant= $_POST['cant'];
        $valor= $_POST['valor'];
        $peso= $_POST['peso'];
        $id_camion= $_POST['id_camion'];
  

    $query= "UPDATE camiones set marca='$marca', modelo='$modelo', 
    color='$color', comentario='$comentario', cant=$cant, valor=$valor,
     peso=$peso WHERE id_camion= $id_camion";

        if ($conn->query($query))Header("Location:index-admin.php");
        else echo "ERROR " . $query . "<br>" . $conn->error;
        }
?>

<div class="container container-1">
     <h1>Monta Cargas Camiones</h1>
     <br>

     <form action="edit-camiones.php?id_camion=<?echo $_GET['id_camion']?>" method="POST">
         <div class="row">
             <div class="col-md-4">
                 <label class="labels" for="marca">Marca:</label>
                 <input id="inputs" required value="<?php echo $marca?>" class="form-control" type="text" name="marca" placeholder="Marca">
             </div>
             <div class="col-md-4">
                 <label class="labels" for="modelo">Modelo:</label>
                 <input id="inputs" required  value=" <?php echo $modelo?>" class="form-control" type="text" name="modelo" placeholder="Modelo">
             </div>
             <div class="col-md-4">
                 <label class="labels" for="color">Color:</label>
                 <input id="inputs" required value=" <?php echo $color?>" class="form-control" type="text" name="color" placeholder="Color">
             </div>
         </div>
         <br>
         <div class="row">
             <div class="col-md-6">
                 <label class="labels" for="marca">Comentario:</label>
                 <textarea id="texto" required <?php echo $comentario?> name="comentario" class="form-control" rows="10"></textarea>
                    <script>
                                document.getElementById('texto').innerHTML="<?php echo $comentario?>";


                    </script>
                </div>
             <div class="col-md-2">
                 <label class="labels" for="cant">Cantidad Lavadoras:</label>
                 <input id="inputs" required  value="<?php echo $cant;?>" class="form-control" type="text" name="cant" placeholder="Cant. Lavadoras">
             </div>
             <div class="col-md-2">
                 <label class="labels" for="color">Valor:</label>
                 <input id="inputs" required  value="<?php echo $valor;?>" class="form-control" type="text" name="valor" placeholder="Valor">
             </div>
             <div class="col-md-2">
                 <label class="labels" for="peso">Peso:</label>
                 <input id="inputs" required  value="<?php echo $peso;?>" class="form-control" type="text" name="peso" placeholder="Peso">
             </div>
         </div>
         <br>

         <div class="row">
             <div class="col-md-2">
             
                 <button type="submit" name="edit" class="form-control btn btn-success btn-sm boton">Editar</button>
             </div>
             <div class="col-md-2">

                <button type="button" onclick="window.location='index-admin.php'" class="form-control btn btn-danger btn-sm boton">Cancelar</button>
             </div>
             <div class="col-md-2">

                <input type="hidden" name="id_camion" value="<?php echo $id_camion?>">
             </div>

        


         </div>

     </form>





 </div>