<?php

class Ciudad
{
private $idCiudad;
    private $nombre;
    private $id_pais;


  function __construct($idCiudad, $nombre, $id_pais) {
       $this->idCiudad = $idCiudad;
       $this->nombre = $nombre;
       $this->id_pais = $id_pais;
   
     }

function setIdCiudad($idCiudad){
       $this->idCiudad = $idCiudad;
     }

function getIdCiudad(){
       return $this->idCiudad;
     } 

function setNombre($nombre){
       $this->nombre = $nombre;
     }

function getNombre(){
       return $this->nombre;
     } 

 function setIdPais($id_pais){
       $this->id_pais = $id_pais;
     } 
     function getIdPais(){
       return $this->id_pais;
     } 

}

?> 
