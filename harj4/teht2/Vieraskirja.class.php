<?php
// Vieraskirja.class.php

class Vieraskirja {
  private $viestit = array(); // Lisätyt viestit tallennetaan tähän taulukkoon
  
  function __construct() {
    // Voidaan jättää tyhjäksi tässä
  }

  function __destruct() {
    $this->viestit = NULL;
  }

  public function lisaa($viesti) {
    array_push($this->viestit,$viesti);
  }

  public function poista($viesti) {
    $index = array_search($viesti, $this->viestit);
    // unset($this->viestit[$viesti]); Tämä ei toimi, tarvitsee indeksin
    unset($this->viestit[$index]);
  } 

  public function tulosta() {
    foreach($this->viestit as $viesti) {
      echo $viesti;
    }
  } 

  public function viestilukumaara() {
    $lkm = 0;
    foreach($this->viestit as $viesti) {
      $lkm++;
    }
    return $lkm;
  }
} 
