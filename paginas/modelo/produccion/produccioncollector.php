<?php

include_once('produccion.php');
include_once("../collector.php");

class produccioncollector extends collector
{
  
  function showproduccion() {
    $rows = self::$db->getRows("SELECT * FROM produccion");        
    ##echo "linea 1";
    $arrayproduccion= array();        
    foreach ($rows as $c){
      $aux = new produccion($c{'id_produccion'},$c{'fecha'},$c{'id_empresa'},$c{'nombre'});
      array_push($arrayproduccion, $aux);
    }
    return $arrayproduccion;        
  }
    
    function deleteproduccion($id) {
         $rows = self::$db->deleteRow("DELETE FROM detalle_produccion WHERE id_produccion=$id",null);
    
        $rows = self::$db->deleteRow("DELETE FROM produccion WHERE id_produccion=$id",null);
    
    
    }
   
    function createproduccion($fecha,$id_empresa,$nombre) {
        $rows = self::$db->insertRow("INSERT INTO produccion (fecha, id_empresa, nombre) VALUES ('$fecha', '$id_empresa', '$nombre')",null);
        
    }
    function updateproduccion($id_produccion,$fecha,$id_empresa,$nombre) {
        $rows = self::$db->insertRow("UPDATE produccion SET fecha='$fecha' , id_empresa='$id_empresa', nombre='$nombre' WHERE id_produccion='$id_produccion'" ,null);
        
    }
}
?>