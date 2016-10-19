<?php
/**
 * Clase creada por Roberto Jesús Sánchez Camacho
 * clase ejemplo de definicion
 */
class Alumno
{

  // Declaración de una propiedad
  public $nombre = 'Roberto';
  public $edad = 20;
  public $curso = 1;
  public $ciclo = "DAW";

  //Getters
  public function getnombre() {
      return $this->nombre;
  }
  public function getedad() {
      return $this->edad;
  }
  public function getcurso() {
      return $this->curso;
  }
  public function getciclo() {
      return $this->ciclo;
  }


  // Setters
  public function setnombre($setnombre){
    $this->nombre = $setnombre;
  }

  public function setedad($setedad){
      if($setedad>=18 ){
    $this->edad = $setedad;
  } elseif ($setedad<18) {
    $this->edad = 18;
    echo "ESTA FORZADO " . $this->edad . "<br>";
  } else{
    $this->edad = 18;
   }
   return $this;
}

  public function setcurso($setcurso){
     if($setcurso<=1 ){
    $this->curso = 1;

  } elseif ($setcurso>2) {
    $this->curso = 1;
    echo "ESTA FORZADO " . $this->curso . "<br>";
  } else{
    $this->curso = $setcurso;
   }
   return $this;
  }

  public function setciclo($setciclo){
    $this->ciclo =$setciclo;
  }


}

?>
