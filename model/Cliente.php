<?php
require_once(__DIR__."/../core/ValidationException.php");
class User {
  private $dni;

 public function __construct($dni=NULL) {
    $this->dni = $dni;
 }

  public function getDni() {
    return $this->dni;
  }
  public function setDni($username) {
    $this->dni = $dni;
  }
  

  public function checkIsValidForRegister() {
    return true;
  }
}