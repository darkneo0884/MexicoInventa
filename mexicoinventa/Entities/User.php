<?php
namespace Entities;

/** @Entity @Table(name="usuario") */
class User
{
	 /**
    * @ID @Column(type="integer")
    * @GeneratedValue(strategy="AUTO")
    */
   private $ID;
   /** @Column(type="string", length=255) */
   private $Nombre;
   /** @Column(type="string", length=255) */
   private $ApellidoMaterno;
   /** @Column(type="string", length=255) */
   private $ApellidoPaterno;
   /** @Column(type="string", length=255) */
   private $Password;
   /** @Column(type="boolean") */
   private $Activado;
   /** @Column(type="string", length=255) */
   private $Email;
   /** @Column(type="string", length=20) */
   private $Telefono;
   /** @Column(type="string", length=255) */
   private $Direccion;
   /** @Column(type="string", length=30) */
   private $FechaNacimiento;
   /** @Column(type="integer") */
   private $EstadoID;
   /** @Column(type="integer") */
   private $PaisID;
   /** @Column(type="integer") */
   private $GradoEstudioID;
   /** @Column(type="string", length=255) */
   private $RFC;
   /** @Column(type="string", length=255) */
   private $UsuarioRedSocial;
   /** @Column(type="string", length=255) */
   private $ImagenRedSocialURL;
   /** @Column(type="string", length=255) */
   private $Empresa;
   /** @Column(type="string",length=30) */
   private $FechaCreacion;

   public function getId()
   {
      return $this->ID;
   }

   public function getNombre()
   {
      return $this->Nombre;
   }

   public function setNombre($Nombre)
   {
      $this->Nombre = $Nombre;
   }

   public function getApellidoP()
   {
      return $this->ApellidoPaterno;
   }

   public function setApellidoP($ApellidoP)
   {
      $this->ApellidoPaterno = $ApellidoP;
   }
   
      public function getApellidoM()
   {
      return $this->ApellidoMaterno;
   }

   public function setApellidoM($ApellidoM)
   {
      $this->ApellidoMaterno= $ApellidoM;
   }
      public function getEmail()
   {
      return $this->Email;
   }

   public function setEmail($Email)
   {
      $this->Email = $Email;
   }
      public function getTelefono()
   {
      return $this->Telefono;
   }

   public function setTelefono($Telefono)
   {
      $this->Telefono = $Telefono;
   }
      public function getPassword()
   {
      return $this->Password;
   }

   public function setPassword($Password)
   {
      $this->Password = $Password;
   }
      public function getActivado()
   {
      return $this->Activado;
   }

   public function setActivado($Activado)
   {
      $this->Activado = $Activado;
   }
      public function getFechaNacimiento()
   {
      return $this->FechaNacimiento;
   }

   public function setFechaNacimiento($FechaNacimiento)
   {
      $this->FechaNacimiento = $FechaNacimiento;
   }
      public function getRFC()
   {
      return $this->RFC;
   }

   public function setRFC($RFC)
   {
      $this->RFC = $RFC;
   }
      public function getDireccion()
   {
      return $this->Direccion;
   }

   public function setDireccion($Direccion)
   {
      $this->Direccion = $Direccion;
   }
      public function getEstadoID()
   {
      return $this->EstadoID;
   }

   public function setEstadoID($EstadoID)
   {
      $this->EstadoID = $EstadoID;
   }
      public function getPaisID()
   {
      return $this->PaisID;
   }

   public function setPaisID($PaisID)
   {
      $this->PaisID = $PaisID;
   }
      public function getGradoEstudioID()
   {
      return $this->GradoEstudioID;
   }

   public function setGradoEstudioID($GradoEstudioID)
   {
      $this->GradoEstudioID = $GradoEstudioID;
   }
      public function getUsuarioRedSocial()
   {
      return $this->UsuarioRedSocial;
   }

   public function setUsuarioRedSocial($UsuarioRedSocial)
   {
      $this->UsuarioRedSocial = $UsuarioRedSocial;
   }
      public function getImagenRedSocialURL()
   {
      return $this->ImagenRedSocialURL;
   }

   public function setImagenRedSocialURL($ImagenRedSocialURL)
   {
      $this->ImagenRedSocialURL = $ImagenRedSocialURL;
   }
      public function getEmpresa()
   {
      return $this->Empresa;
   }
   public function setEmpresa($Empresa)
   {
      $this->Empresa = $Empresa;
   }
   public function getFechaCreacion()
   {
      return $this->FechaCreacion;
   }
   public function setFechaCreacion($FechaCreacion)
   {
      $this->FechaCreacion = $FechaCreacion;
   }
}
?>