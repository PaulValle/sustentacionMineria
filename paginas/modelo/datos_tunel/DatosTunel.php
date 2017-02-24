<?php

class DatosTunel
{
    private $id_datos_tunel;
    private $oxigeno;
    private $metano;
   
    
     function __construct($id_datos_tunel, $oxigeno, $metano) {
       $this->id_datos_tunel = $id_datos_tunel;
       $this->oxigeno = $oxigeno;
       $this->metano = $metano;
     
     }
    
     function setId_datos_tunel($id_datos_tunel){
       $this->id_datos_tunel = $id_datos_tunel;
     } 
     function getId_datos_tunel(){
       return $this->id_datos_tunel;
     } 
     function setOxigeno($oxigeno){
       $this->oxigeno = $oxigeno;
     } 
     function getOxigeno(){
       return $this->oxigeno;
     } 
    
     function setMetano($metano){
       $this->metano = $metano;
     } 
     function getMetano(){
       return $this->metano;
     } 
    
   
}

?> 
