<?php

include_once('detalle_produccion.php');
include_once("../collector.php");

class detalle_produccioncollector extends collector
{
  
  function showdetalle_produccion() {
    $rows = self::$db->getRows("SELECT * FROM detalle_produccion");        
    ##echo "linea 1";
    $arraydetalle_produccion= array();        
    foreach ($rows as $c){
      $aux = new detalle_produccion($c{'id_detalle'},$c{'id_produccion'},$c{'id_mineral'},$c{'peso'});
      array_push($arraydetalle_produccion, $aux);
    }
    return $arraydetalle_produccion;        
  }
    
    function deletedetalle_produccion($id) {
        $rows = self::$db->deleteRow("DELETE FROM detalle_produccion WHERE id_detalle=$id",null);
    
    
    }
   
    function createdetalle_produccion($id_produccion,$id_mineral,$peso) {
        $rows = self::$db->insertRow("INSERT INTO detalle_produccion (id_produccion, id_mineral, peso) VALUES ('$id_produccion', '$id_mineral','$peso')",null);
        
    }
    function updatedetalle_produccion($id_detalle_produccion,$id_produccion,$id_mineral, $peso) {
        $rows = self::$db->insertRow("UPDATE detalle_produccion SET id_produccion='$id_produccion' , id_mineral='$id_mineral', peso='$peso' WHERE id_detalle='$id_detalle_produccion'" ,null);
        
    }
}
?>