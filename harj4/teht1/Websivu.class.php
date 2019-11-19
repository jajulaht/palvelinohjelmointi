<?php
// Websivu.class.php

class Websivu {
   // Luokan attribuutit
   // Mahdolliset avainsanat: public, protected, private
   protected $otsikko;
   protected $avainsanat;
   protected $sisalto;

   // Konstruktori vain avainsanalla __construct (PHP5)
   function __construct($otsikko, $avainsanat) {
      $this->otsikko = $otsikko;
      $this->avainsanat = $avainsanat;
    }
    
   // Destruktori vain avainsanalla __destruct
    function __destruct() {
       $this->otsikko = NULL;
       $this->avainsanat = NULL;
       $this->sisalto = NULL;
    }
    
    public function asetaBodyelementinSisalto($data) {
       $this->sisalto = $data;
    }
    
    public function naytaSivu() {
       echo "<html><head>";
       $this->tulostaOtsikkoelementti();
       $this->tulostaAvainsanaelementti();
       echo "<body>";
       echo $this->sisalto;
       echo "</body></html>";
    }

    private function tulostaOtsikkoelementti() {
        echo "<title>$this->otsikko</title>";
    }
    
    private function tulostaAvainsanaelementti() {
        echo "<meta name='keywords' content='$this->avainsanat'>";
    }
}