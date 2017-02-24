/**<?php

include_once('Licencia.php');
include_once("../collector.php");

class LicenciaCollector extends collector
{
  
  function showLicencias() {
    $rows = self::$db->getRows("SELECT * FROM licencia");        
    ##echo "linea 1";
    $arrayLicencia= array();        
    foreach ($rows as $c){
      $aux = new Licencia($c{'id_licencia'},$c{'nombre'},$c{'tipo'});
      array_push($arrayLicencia, $aux);
    }
    return $arrayLicencia;        
  }
    
    function deleteLicencia($id) {
         $rows = self::$db->deleteRow("DELETE FROM persona WHERE id_licencia=$id",null);
        $rows = self::$db->deleteRow("DELETE FROM licencia WHERE id_licencia=$id",null);
    
    
    }
   
    function createLicencia($nombre,$tipo) {
        $rows = self::$db->insertRow("INSERT INTO licencia (nombre, tipo) VALUES ('$nombre', '$tipo')",null);
        
    }
    
     function updateLicencia($id,$nombre,$tipo) {
        $rows = self::$db->insertRow("UPDATE licencia SET nombre='$nombre' , tipo='$tipo' WHERE id_licencia='$id'" ,null);
        
    }
}
?>