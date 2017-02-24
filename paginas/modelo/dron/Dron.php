<?php
class Dron
{
    private $idDron;
    private $marca;
    private $num_serial;
    private $id_empresa;
    private $bateria_minutos;
    
     function __construct($idDron, $marca, $num_serial, $id_empresa,$bateria_minutos) {
       $this->idDron = $idDron;
       $this->marca = $marca;
       $this->num_serial = $num_serial;
       $this->id_empresa = $id_empresa;
       $this->bateria_minutos = $bateria_minutos;
     }
    
     function setIdDron($idDron){
       $this->idDron = $idDron;
     } 
     function getIdDron(){
       return $this->idDron;
     } 
     function setMarca($marca){
       $this->marca = $marca;
     } 
     function getMarca(){
       return $this->marca;
     } 
    
     function setNumSerial($num_serial){
       $this->num_serial = $num_serial;
     } 
     function getNumSerial(){
       return $this->num_serial;
     } 
    
     function setIdEmpresa($id_empresa){
       $this->id_empresa = $id_empresa;
     } 
     function getIdEmpresa(){
       return $this->id_empresa;
     } 
    
    function setMinBateria($bateria_minutos){
       $this->$bateria_minutos = $$bateria_minutos;
     } 
     function getMinBateria(){
       return $this->bateria_minutos;
     } 
    
}

?> 
