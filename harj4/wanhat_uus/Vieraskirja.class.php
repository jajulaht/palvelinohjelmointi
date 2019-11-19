<?php
// Vieraskirja.class.php

class Vieraskirja {
    private $viestit = array(); // Lisätyt viestit tallennetaan tähän taulukkoon
    
    function __construct() {
      $this->viestit = $viestit;
    }

    function __destruct() {
      $this->viestit = NULL;
    }

    public function lisaa($viesti) {
        array_push($this->viestit,$viesti);
    }

    public function poista($viesti) {
    //...
    } 

    public function tulosta() {
      foreach($viestit as $viesti) {
        echo $viesti;
      }
    } 

    public function laskeViestilukumaara() {
      $lkm = 0;
      foreach($viestit as $viesti) {
        $lkm++;
        echo $lkm;
      }
    } 
