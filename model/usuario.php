<?php 

class usuario {
    private $idUsuario;
    private $usuarioLogin;
    private $usuarioPassword;
    private $usuarioEstado;
    private $usuarioRol;

    public function getIdUsuario(){
        return $this->idUsuario;
    }
    
    public function getUsuarioLogin(){
        return $this->usuarioLogin;
    }   
     public function getUsuarioPassword(){
        return $this->usuarioPassword;
    }   
     public function getUsuarioEstado(){
        return $this->usuarioEstado;
    }  
      public function getUsuarioRol(){
        return $this->usuarioRol;
    }

}


?>