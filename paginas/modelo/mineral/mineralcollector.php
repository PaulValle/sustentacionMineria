<?php

include_once('mineral.php');
include_once("../collector.php");

class mineralcollector extends collector
{
  
  function showmineral() {
    $rows = self::$db->getRows("SELECT * FROM mineral");        
    ##echo "linea 1";
    $arraymineral= array();        
    foreach ($rows as $c){
      $aux = new mineral($c{'id_mineral'},$c{'nombre'},$c{'descripcion'});
      array_push($arraymineral, $aux);
    }
    return $arraymineral;        
  }
    
    function deletemineral($id) {
        $rows = self::$db->deleteRow("DELETE FROM detalle_produccion WHERE id_mineral=$id",null);
        $rows = self::$db->deleteRow("DELETE FROM mineral WHERE id_mineral=$id",null);
    
    
    }
   
    function createmineral($nombre,$descripcion) {
        $rows = self::$db->insertRow("INSERT INTO mineral (nombre, descripcion) VALUES ('$nombre', '$descripcion')",null);
        
    }
    function updatemineral($id_mineral,$nombre,$descripcion) {
        $rows = self::$db->insertRow("UPDATE mineral SET nombre='$nombre' , descripcion='$descripcion' WHERE id_mineral='$id_mineral'" ,null);
        
    }
}
?>