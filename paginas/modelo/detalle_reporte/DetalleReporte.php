<?php

class DetalleReporte
{
    private $id_detalle_reporte;
    private $id_dron;
    private $id_tunel;
    private $id_reporte;
    private $id_datos_tunel;
 
     function __construct($id_detalle_reporte, $id_dron, $id_tunel, $id_reporte, $id_datos_tunel) {
       $this->id_detalle_reporte = $id_detalle_reporte;
       $this->id_dron = $id_dron;
       $this->id_tunel = $id_tunel;
       $this->id_reporte = $id_reporte;
       $this->id_datos_tunel = $id_datos_tunel;
     }
    
     function setid_detalle_reporte($id_detalle_reporte){
       $this->id_detalle_reporte = $id_detalle_reporte;
     } 
     function getid_detalle_reporte(){
       return $this->id_detalle_reporte;
     } 
     function setid_dron($id_dron){
       $this->id_dron = $id_dron;
     } 
     function getid_dron(){
       return $this->id_dron;
     } 
    
     function setid_tunel($id_tunel){
       $this->id_tunel = $id_tunel;
     } 
     function getid_tunel(){
       return $this->id_tunel;
     } 
    
     function setid_reporte($id_reporte){
       $this->id_reporte = $id_reporte;
     } 
     function getid_reporte(){
       return $this->id_reporte;
     } 

     function setid_datos_tunel($id_datos_tunel){
       $this->id_datos_tunel = $id_datos_tunel;
     } 
     function getid_datos_tunel(){
       return $this->id_datos_tunel;
     }    
}

?> 
