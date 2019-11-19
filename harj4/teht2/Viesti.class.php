<?php
// Viesti.class.php

/*  Viesti.class.php, jossa tulee olla ainakin tarvittavat ominaisuudet (attribuutit) 
viestin tietojen tallentamiseen. Viesti-luokan tulee sisältää tarvittavan 
konstruktorin ja destruktorin. Lisäksi tulee kirjoittaa ainakin 
tarvittava metodi yksittäisen viestin tietojen tulostamiseen.*/
// new Viesti('Otsikko 1','Ekaa viestiä pukkaa, pukkaa', 'Ari Rantala', '31.1.2008');

class Viesti {
  protected $otsikko;
  protected $viestiteksti;
  protected $kirjoittaja;
  protected $pvm;

  function __construct($otsikko, $viestiteksti, $kirjoittaja, $pvm) {
    $this->otsikko = $otsikko;
    $this->viestiteksti = $viestiteksti;
    $this->kirjoittaja = $kirjoittaja;
    $this->pvm = $pvm;
  }
  
  function __destruct() {
    $this->otsikko = NULL;
    $this->viestiteksti = NULL;
    $this->kirjoittaja = NULL;
    $this->pvm = NULL;
  }

  // Erikoismetodia __toString kutsustaan, jos
  // ollaan tulostamassa ao. luokasta luotua oliota
  function __toString() {
    return "" .
           "<h4>$this->otsikko</h4>" .
           "<p>$this->viestiteksti</p>" .
           "<ul>" .
           "<li>Kirjoittaja: $this->kirjoittaja</li>" .
           "<li>Jätetty: $this->pvm</li>" .
           "</ul>";
  }
}