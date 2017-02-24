<?php

include_once('empresa.php');
include_once("../collector.php");
include_once("../dron/DronCollector.php");

class empresaCollector extends collector
{

function showEmpresas() {
    $rows = self::$db->getRows("SELECT * FROM empresa");        
   
    $arrayEmpresa= array();        
    foreach ($rows as $c){
      $aux = new empresa($c{'id_empresa'},$c{'razonSocial'},$c{'ruc'},$c{'direccion'},$c{'telefono'},$c{'id_ciudad'});
      array_push($arrayEmpresa, $aux);
    }
    return $arrayEmpresa;        
  }

      function deleteEmpresa($id) {
          
        $rows = self::$db->deleteRow("DELETE FROM empresa WHERE id_empresa=$id",null);
    
    
    }

    function createEmpresa($razonSocial,$ruc,$telefono,$direccion,$idCiudad) {
$rows = self::$db->insertRow("INSERT INTO empresa (razonSocial, ruc, telefono, direccion, id_ciudad) VALUES ('$razonSocial', '$ruc','$telefono', '$direccion', '$idCiudad')",null);
    }

    function updateEmpresa($id,$razonsocial,$ruc,$direccion,$telefono,$idCiudad) {
        $rows = self::$db->insertRow("UPDATE empresa SET razonSocial='$razonsocial' , ruc='$ruc' ,telefono= '$telefono'  ,direccion= '$direccion' ,id_ciudad= '$idCiudad' WHERE id_empresa='$id'" ,null);
        
    }

  }
?>

