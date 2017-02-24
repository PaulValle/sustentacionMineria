<?php

include_once('Dron.php');
include_once("../collector.php");

class DronCollector extends collector
{
  
  function showDron() {
    $rows = self::$db->getRows("SELECT * FROM dron");        
    ##echo "linea 1";
    $arrayDron= array();        
    foreach ($rows as $c){
      $aux = new Dron($c{'id_dron'},$c{'marca'},$c{'num_serial'},$c{'id_empresa'},$c{'bateria_minutos'});
      array_push($arrayDron, $aux);
    }
    return $arrayDron;        
  }
    
    function deleteDron($id) {
         $rows = self::$db->deleteRow("DELETE FROM detalle_reporte WHERE id_dron=$id",null);
        $rows = self::$db->deleteRow("DELETE FROM dron WHERE id_dron=$id",null);
    
    
    }
   
    function createDron($marca,$num_serial,$id_empresa,$bateria_minutos) {
        $rows = self::$db->insertRow("INSERT INTO dron (marca, num_serial , id_empresa , bateria_minutos) VALUES ('$marca', '$num_serial','$id_empresa','$bateria_minutos')",null);
        
    }
    
     function updateDron($id,$marca,$num_serial,$id_empresa,$bateria_minutos) {
        $rows = self::$db->insertRow("UPDATE dron SET marca='$marca' ,num_serial='$num_serial', id_empresa='$id_empresa' ,bateria_minutos= '$bateria_minutos' WHERE id_dron='$id'" ,null);
        
    }
}
?>