<?php

function load_template($name)
{

    include $_SERVER['DOCUMENT_ROOT'] . "/assets/_templates/$name.php"; //not consider //super global
    // include $_SERVER['DOCUMENT_ROOT'] . "/Vacsoft-Website/vacsoftteck/assets/_templates/$name.php"; 
}
function load_templatejs($name)
{

    include $_SERVER['DOCUMENT_ROOT'] . "/assets/_templates/$name.js"; //not consider //super global
    // include $_SERVER['DOCUMENT_ROOT'] . "/Vacsoft-Website/vacsoftteck/assets/_templates/$name.js";
}
