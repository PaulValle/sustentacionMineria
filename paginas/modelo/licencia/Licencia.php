<?php

class Licencia
{
    private $idLicencia;
    private $nombre;
    private $tipo;
    
     function __construct($idLicencia, $nombre, $tipo) {
       $this->idLicencia = $idLicencia;
       $this->nombre = $nombre;
       $this->tipo = $tipo;
     }
    
     function setIdLicencia($idLicencia){
       $this->idLicencia = $idLicencia;
     } 
     function getIdLicencia(){
       return $this->idLicencia;
     } 
     function setNombre($nombre){
       $this->nombre = $nombre;
     } 
     function getNombre(){
       return $this->nombre;
     } 
    
     function setTipo($tipo){
       $this->tipo = $tipo;
     } 
     function getTipo(){
       return $this->tipo;
     } 
    
    
}

?> 
