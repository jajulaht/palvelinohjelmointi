<?php
// Autolaskuri.class.php

class Autolaskuri {
  protected $vw;
  protected $opel;
  protected $toyota;

  function __construct() {
    $this->vw = 0;
    $this->opel = 0;
    $this->toyota = 0;
  }
  
  function __destruct() {
    $this->vw = NULL;
    $this->opel = NULL;
    $this->toyota = NULL;
  }

  public function tarkistaMaara($merkki) {
    if ($merkki == 'vw') { $this->vw++;}
    elseif ($merkki == 'opel') { $this->opel++ ;}
    elseif ($merkki == 'toyota') { $this->toyota++ ;}
    else {
      $this->vw = 0;
      $this->opel = 0;
      $this->toyota = 0;
    }
  }

  // Erikoismetodia __toString kutsustaan, jos
  // ollaan tulostamassa ao. luokasta luotua oliota
  function __toString() {
    return "" .
           "<pre>Volkswagenit ... : $this->vw kpl</pre>" .
           "<pre>Opelit ......... : $this->opel kpl</pre>" .
           "<pre>Toyotat ........ : $this->toyota kpl</pre>";
  }

} 