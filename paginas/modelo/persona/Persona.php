<?php

class Persona
{
    private $idPersona;
    private $nombre;
    private $apellido;
    private $email;
    private $usuario;
    private $clave;
    private $ruc;
    private $id_empresa;
    private $id_licencia;
    private $fecha_nacimiento;
    
     function __construct($idPersona, $nombre, $apellido, $email, $usuario, $clave, $ruc, $id_empresa, $id_licencia , $fecha_nacimiento ) {
       $this->idPersona = $idPersona;
       $this->nombre = $nombre;
       $this->apellido = $apellido;
       $this->email = $email;
       $this->usuario = $usuario;
       $this->clave = $clave;
       $this->ruc = $ruc;
       $this->id_empresa = $id_empresa;
       $this->id_licencia = $id_licencia;
       $this->fecha_nacimiento = $fecha_nacimiento;
     }
    
     function setIdPersona($idPersona){
       $this->idPersona = $idPersona;
     } 
     function getIdPersona(){
       return $this->idPersona;
     } 
     function setNombre($nombre){
       $this->nombre = $nombre;
     } 
     function getNombre(){
       return $this->nombre;
     } 
    
     function setApellido($apellido){
       $this->apellido = $apellido;
     } 
     function getApellido(){
       return $this->apellido;
     } 
    
     function setEmail($email){
       $this->email = $email;
     } 
     function getEmail(){
       return $this->email;
     } 

     function setUsuario($usuario){
       $this->usuario = $usuario;
     } 
     function getUsuario(){
       return $this->usuario;
     } 
   
     function setClave($clave){
       $this->clave = $clave;
     } 
     function getClave(){
       return $this->clave;
     } 

     function setRuc($ruc){
       $this->ruc = $ruc;
     } 
     function getRuc(){
       return $this->ruc;
     } 

     function setIdEmpresa($id_empresa){
       $this->id_empresa = $id_empresa;
     } 
     function getIdEmpresa(){
       return $this->id_empresa;
     } 

     function setIdLicencia($id_licencia){
       $this->id_licencia = $id_licencia;
     } 
     function getIdLicencia(){
       return $this->id_licencia;
     } 

     function setFechaNacimiento($fecha_nacimiento){
       $this->fecha_nacimiento = $fecha_nacimiento;
     } 
     function getFechaNacimiento(){
       return $this->fecha_nacimiento;
     } 
    
}

?> 
