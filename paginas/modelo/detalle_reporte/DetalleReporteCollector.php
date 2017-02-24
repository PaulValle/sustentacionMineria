<?php

include_once('DetalleReporte.php');
include_once("../collector.php");

class DetalleReporteCollector extends collector
{
  
  function showDetalleReportes() {
    $rows = self::$db->getRows("SELECT * FROM detalle_reporte");        
    $arrayDetalleReporte= array();        
    foreach ($rows as $c){
      $aux = new DetalleReporte($c{'id_detalle_reporte'},$c{'id_dron'},$c{'id_tunel'},$c{'id_reporte'},$c{'id_datos_tunel'});
      array_push($arrayDetalleReporte, $aux);
    }
    return $arrayDetalleReporte;        
  }
    
    function deleteDetalleReporte($id) {
        $rows = self::$db->deleteRow("DELETE FROM detalle_reporte WHERE id_detalle_reporte=$id",null);
    
    
    }
   
    function createDetalleReporte($id_dron,$id_tunel,$id_reporte,$id_datos_tunel) {
        $rows = self::$db->insertRow("INSERT INTO detalle_reporte (id_dron,id_tunel,id_reporte,id_datos_tunel) VALUES ('$id_dron', '$id_tunel','$id_reporte','$id_datos_tunel')",null);
        
    }
    
     function updateDetalleReporte($id_detalle,$id_dron,$id_tunel,$id_reporte,$id_datos_tunel) {
       
         $rows = self::$db->insertRow("UPDATE detalle_reporte SET id_dron='$id_dron' , id_tunel='$id_tunel' , id_reporte='$id_reporte' , id_datos_tunel='$id_datos_tunel' WHERE id_detalle_reporte='$id_detalle'" ,null);
    }
}
?>
