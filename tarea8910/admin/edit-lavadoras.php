<?php
   include("../includes/cabeza-admin.php");
   include("../includes/pie-admin.php");
   require("../includes/db.php");

   if(isset($_GET['id_lav'])){
    $id_lav = $_GET ['id_lav'];
    $query = "SELECT * FROM lavadoras WHERE id_lav= $id_lav" ; 
    $res= mysqli_query($conn,$query);
    if(!empty($res)AND(mysqli_num_rows($res)==1)){
       
        $row = mysqli_fetch_array($res);
        $codigo= $row['codigo'];
        $marca= $row['marca'];
        $modelo = $row['modelo'];
        $valor= $row['valor'];
        $peso= $row['peso'];
        $id_camion= $row['id_camion'];
    } 
}  
   

if(isset($_POST['edit'])){
    $id_lav= $_GET ['id_lav'];
    $codigo= $_POST['codigo'];
    $marca= $_POST['marca'];
    $modelo = $_POST['modelo'];
    $valor= $_POST['valor'];
    $peso= $_POST['peso'];
    $id_lav= $_POST['id_lav'];
    $id_camion= $_POST['id_camion'];

        $query= "UPDATE lavadoras set codigo='$codigo', marca='$marca',
        modelo='$modelo', valor=$valor, peso=$peso, id_camion= $id_camion WHERE id_lav= $id_lav ";

        if ($conn->query($query))Header("index-admin.php");
        else echo "ERROR " . $query . "<br>" . $conn->error;
            }

?>



<br>
<div class="container container-1">

    <h1>Monta Cargas Lavadoras</h1>
    <br>

    <form action="edit-lavadoras.php?id_lav=<?echo $_GET['id_lav']?>" method="POST">
         <div class="row">
             <div class="col-md-4">
                 <label class="labels" for="marca">Código:</label>
                 <input id="inputs" required value="<?php echo $codigo?>" class="form-control" type="text" name="codigo" placeholder="Código">
             </div>
             <div class="col-md-4">
                 <label class="labels" for="modelo">Marca:</label>
                 <input id="inputs" required  value=" <?php echo $marca?>" class="form-control" type="text" name="marca" placeholder="Marca">
             </div>
             <div class="col-md-2">
                 <label class="labels" for="color">Modelo:</label>
                 <input id="inputs" required value=" <?php echo $modelo?>" class="form-control" type="text" name="modelo" placeholder="Modelo">
             </div>
             <div class="col-md-2">
                 <label class="labels" for="color">Valor:</label>
                 <input id="inputs" required value=" <?php echo $valor?>" class="form-control" type="text" name="valor" placeholder="Valor">
             </div>
         </div>
         <br>
         <div class="row">
             <div class="col-md-4">
                 <label class="labels" for="peso">Peso:</label>
                 <input id="inputs" required  value="<?php echo $peso;?>" class="form-control" type="text" name="peso" placeholder="Peso">
             </div>
             <div class="col-md-4">
                 <label class="labels" for="color">Id Camión:</label>
                 <input id="inputs" required  value="<?php echo $id_camion;?>" class="form-control" type="text" name="id_camion" placeholder="Valor">
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

                <input type="hidden" name="id_lav" value="<?php echo $id_lav?>">
             </div>

        


         </div>

     </form>

</div>