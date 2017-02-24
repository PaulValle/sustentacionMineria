<?php

include_once('ciudad.php');
include_once("../collector.php");

class CiudadCollector extends collector
{

function showCiudades() {
    $rows = self::$db->getRows("SELECT * FROM ciudad");        
 
    $arrayCiudad= array();        
    foreach ($rows as $c){
      $aux = new Ciudad($c{'id_ciudad'},$c{'nombre'},$c{'id_pais'});
      array_push($arrayCiudad, $aux);
    }
    return $arrayCiudad;        
  }

    function deleteCiudad($id) {
        $rows = self::$db->deleteRow("DELETE FROM ciudad WHERE id_ciudad=$id",null);
    
    
    }
   
    function createCiudad($nombre,$id_pais) {
        $rows = self::$db->insertRow("INSERT INTO ciudad (nombre, id_pais) VALUES ('$nombre', '$id_pais')",null);
        
    }
    
     function updateCiudad($id,$nombre,$id_pais) {
        $rows = self::$db->insertRow("UPDATE ciudad SET nombre='$nombre' , id_pais='$id_pais' WHERE id_ciudad='$id'" ,null);
        
    }

  }
?>

