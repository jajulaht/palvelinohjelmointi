<?php
// h4t3-Autolaskuri.class.php

class Autolaskuri {
    
    public function tarkistaMaara(){

        if (strcmp($_REQUEST['nappi'], "VW") == 0) {
            $_SESSION['VW_lkm']++;
         }
         if (strcmp($_REQUEST['nappi'], "Opel") == 0) {
           $_SESSION['opel_lkm']++;
         }
         if (strcmp($_REQUEST['nappi'], "Toyota") == 0) {
             $_SESSION['toyota_lkm']++;
         }
         if (strcmp($_REQUEST['nappi'], "Nollaa") == 0) {
             $_SESSION['VW_lkm'] = 0;
             $_SESSION['opel_lkm'] = 0;
             $_SESSION['toyota_lkm'] = 0; 
         }
         
    }

    
    
}