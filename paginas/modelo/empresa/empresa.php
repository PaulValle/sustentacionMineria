<?php

class empresa
{
private $idEmpresa;
private $razonsocial;
 private $ruc;
 private $direccion;
 private $telefono;
 private $id_ciudad;

  function __construct($idEmpresa, $razonsocial, $ruc, $direccion, $telefono, $id_ciudad) {
         $this->idEmpresa = $idEmpresa;
       $this->razonsocial = $razonsocial;
       $this->ruc = $ruc;
       $this->direccion = $direccion;
 $this->telefono = $telefono;
 $this->id_ciudad = $id_ciudad;
   
     }

 function setIdCiudad($id_ciudad){
       $this->id_ciudad= $id_ciudad;
     } 
     function getIdCiudad(){
       return $this->id_ciudad;
     } 

function setIdEmpresa($idEmpresa){
       $this->idEmpresa = $idEmpresa;
     }

function getIdEmpresa(){
       return $this->idEmpresa;
     } 

function setRazonSocial($razonsocial){
       $this->razonsocial = $razonsocial;
     }

function getRazonSocial(){
       return $this->razonsocial;
     } 

 function setRuc($ruc){
       $this->ruc = $ruc;
     } 
     function getRuc(){
       return $this->ruc;
     } 
 function setDireccion($direccion){
       $this->direccion = $direccion;
     } 
     function getDireccion(){
       return $this->direccion;
     } 
 function setTelefono($telefono){
       $this->telefono = $telefono;
     } 
     function getTelefono(){
       return $this->telefono;
     } 


}

?> 
