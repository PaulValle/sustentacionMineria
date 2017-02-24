<?php

include_once('ReporteTuneles.php');
include_once("../collector.php");

class ReporteTunelesCollector extends collector
{
  
  function showReporteTuneles() {
    $rows = self::$db->getRows("SELECT * FROM reporte_tuneles");        
    ##echo "linea 1";
    $arrayReporteTuneles= array();        
    foreach ($rows as $c){
      $aux = new ReporteTuneles($c{'id_reporte'},$c{'id_empresa'},$c{'fecha'});
      array_push($arrayReporteTuneles, $aux);
    }
    return $arrayReporteTuneles;        
  }
    
    function deleteReporteTuneles($id) {
        $rows = self::$db->deleteRow("DELETE FROM detalle_reporte WHERE id_reporte=$id",null);
        $rows = self::$db->deleteRow("DELETE FROM reporte_tuneles WHERE id_reporte=$id",null);
    
    
    }
   
    function createReporteTuneles($id_empresa,$fecha) {
        $rows = self::$db->insertRow("INSERT INTO reporte_tuneles (id_empresa,fecha) VALUES ('$id_empresa', '$fecha')",null);
        
    }
    
     function updateReporteTuneles($id_reporte,$id_empresa,$fecha) {
       
          $rows = self::$db->insertRow("UPDATE reporte_tuneles SET id_reporte='$id_reporte' , id_empresa='$id_empresa' , fecha='$fecha' WHERE id_reporte='$id_reporte'" ,null);
        
    }
}
?>
