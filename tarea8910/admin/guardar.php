<?php

include("../includes/db.php");




if(isset($_POST)){
        $marca = $_POST['marca'];
        $modelo = $_POST['modelo'];
        $color = $_POST['color'];
        $comentario = $_POST['comentario'];
        $cant = $_POST['cant'];
        $valor = $_POST['valor'];
        $peso = $_POST['peso'];
      

        $query = "INSERT INTO camiones (marca,modelo,color,comentario,cant,valor,peso)
            VALUES('$marca','$modelo','$color','$comentario',$cant,$valor,$peso)";

        if ($conn->query($query))  Header("Location:index-admin.php");
        else echo "ERROR " . $query . "<br>" . $conn->error;
}



    ?>
