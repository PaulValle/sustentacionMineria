<?php

class Mina
{
    private $idMina;
    private $nombre;
    private $id_empresa;
    private $ubicacion;
    
     function __construct($idMina, $nombre, $id_empresa, $ubicacion) {
       $this->idMina = $idMina;
       $this->nombre = $nombre;
       $this->id_empresa = $id_empresa;
       $this->ubicacion = $ubicacion;
     }
    
     function setIdMina($idMina){
       $this->idMina = $idMina;
     } 
     function getIdMina(){
       return $this->idMina;
     } 
     function setNombre($nombre){
       $this->nombre = $nombre;
     } 
     function getNombre(){
       return $this->nombre;
     } 
    
     function setIdEmpresa($id_empresa){
       $this->id_empresa = $id_empresa;
     } 
     function getIdEmpresa(){
       return $this->id_empresa;
     } 
    
     function setUbicacion($ubicacion){
       $this->ubicacion = $ubicacion;
     } 
     function getUbicacion(){
       return $this->ubicacion;
     } 
    
}

?> 
