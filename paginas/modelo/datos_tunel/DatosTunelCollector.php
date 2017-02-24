<?php

include_once('DatosTunel.php');
include_once("../collector.php");

class DatosTunelCollector extends collector
{
  
  function showDatosTunels() {
    $rows = self::$db->getRows("SELECT * FROM datos_tunel");        
    ##echo "linea 1";
    $arrayDatosTunel= array();        
    foreach ($rows as $c){
      $aux = new DatosTunel($c{'id_datos_tunel'},$c{'oxigeno'},$c{'metano'});
      array_push($arrayDatosTunel, $aux);
    }
    return $arrayDatosTunel;        
  }
    
    function deleteDatosTunel($id) {
        
        $rows = self::$db->deleteRow("DELETE FROM detalle_reporte WHERE id_tunel=$id",null);
        $rows = self::$db->deleteRow("DELETE FROM datos_tunel WHERE id_datos_tunel=$id",null);
    
    
    }
   
    function createDatosTunel($oxigeno,$metano) {
        $rows = self::$db->insertRow("INSERT INTO datos_tunel (oxigeno,metano) VALUES ('$oxigeno', '$metano')",null);
        
    }
    
     function updateDatosTunel($id,$oxigeno,$metano) {
        $rows = self::$db->insertRow("UPDATE datos_tunel SET oxigeno='$oxigeno' , metano='$metano' WHERE id_datos_tunel='$id'" ,null);
        
    }
}
?>
