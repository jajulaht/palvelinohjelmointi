<?php
// h4t1-nayta-websivu.php

function __autoload($class_name) {
    require_once $class_name . '.class.php';
}

$bodynsisalto = "<h1>Tää on tän sivun otsikko</h1><p>Lorem ipsum.</p>";

$munkotisivu = new Websivu("Sivun otsikko palkkiin", "minä, kotisivu");

$munkotisivu->asetaBodyelementinSisalto($bodynsisalto);

$munkotisivu->naytaSivu();