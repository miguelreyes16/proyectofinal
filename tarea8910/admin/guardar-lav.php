<?php

    include('../includes/db.php');

if(isset($_POST)){
    $codigo = $_POST['codigo'];
    $marca = $_POST['marca'];
    $modelo = $_POST['modelo'];
    $valor = $_POST['valor'];
    $peso = $_POST['peso'];
    $id_camion = $_POST['id_camion'];
  

    $query = "INSERT INTO lavadoras (codigo,marca,modelo,valor,peso,id_camion)
        VALUES('$codigo','$marca','$modelo',$valor,$peso, $id_camion)";

    

         $sum = "SELECT SUM(valor) AS resultado FROM lavadoras WHERE id_camion= $id_camion";
            $consultsum = mysqli_query($conn, $sum);
            $arre = mysqli_fetch_array($consultsum);

            $sumpeso = "SELECT SUM(peso) AS peso FROM lavadoras WHERE id_camion= $id_camion";
            $consultsumpeso = mysqli_query($conn, $sumpeso);
            $arrep = mysqli_fetch_array($consultsumpeso);

            $peso = $arrep['peso'];
            $valor = $arre['resultado'];
        


            $update ="UPDATE camiones SET valor = $valor, peso = $peso WHERE id_camion = $id_camion;";
            $consulta= mysqli_query($conn,$update);

            if ($conn->query($query)) Header("Location:index-admin.php");
            else echo "ERROR " . $query . "<br>" . $conn->error;
}



?>