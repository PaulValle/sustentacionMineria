<?php

class detalle_produccion
{
    private $id_detalle_produccion;
    private $id_produccion;
    private $id_mineral;
    private $peso;
    
     function __construct($id_detalle_produccion, $id_produccion, $id_mineral, $peso) {
       $this->id_detalle_produccion = $id_detalle_produccion;
       $this->id_produccion = $id_produccion;
       $this->id_mineral = $id_mineral;
       $this->peso = $peso;
     }
    
     function setid_detalle_produccion($id_detalle_produccion){
       $this->id_detalle_produccion = $id_detalle_produccion;
     } 
     function getid_detalle_produccion(){
       return $this->id_detalle_produccion;
     } 
     function setid_produccion($id_produccion){
       $this->id_produccion = $id_produccion;
     } 
     function getid_produccion(){
       return $this->id_produccion;
     } 
    
     function setid_mineral($id_mineral){
       $this->id_mineral = $id_mineral;
     } 
     function getid_mineral(){
       return $this->id_mineral;
     } 
    function setpeso($peso){
       $this->peso = $peso;
     } 
     function getpeso(){
       return $this->peso;
     } 
}

?> 
