<?php

include("../includes/cabeza-admin.php");
include("../includes/pie-admin.php");
include("../includes/db.php");


if(isset($_GET['id_camion'])){
    
    $id= $_GET['id_camion'];
    $query = "DELETE FROM camiones where id_camion=$id";
    $res= mysqli_query($conn,$query);

if(!$res){

 
    

    die("NO SE PUDO ELIMINAR");


}
    
header ("Location:index-admin.php");
    

}


if(isset($_GET['id_lav'])){
    
    $id= $_GET['id_lav'];
    $query = "DELETE FROM lavadoras where id_lav=$id";
    $res= mysqli_query($conn,$query);

if(!$res){

 
    

    die("NO SE PUDO ELIMINAR");


}
    
header ("Location:index-admin.php");
    

}






?>