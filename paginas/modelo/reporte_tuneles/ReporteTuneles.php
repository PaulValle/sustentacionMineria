<?php

class ReporteTuneles
{
    private $id_reporte;
    private $id_empresa;
    private $fecha;
   
    
     function __construct($id_reporte, $id_empresa, $fecha) {
       $this->id_reporte = $id_reporte;
       $this->id_empresa = $id_empresa;
       $this->fecha = $fecha;
      
     }
    
     function setId_reporte($id_reporte){
       $this->id_reporte = $id_reporte;
     } 
     function getId_reporte(){
       return $this->id_reporte;
     } 
     function setId_empresa($id_empresa){
       $this->id_empresa = $id_empresa;
     } 
     function getId_empresa(){
       return $this->id_empresa;
     } 
    
     function setFecha($fecha){
       $this->fecha = $fecha;
     } 
     function getFecha(){
       return $this->fecha;
     } 
    
   
    
}

?> 
