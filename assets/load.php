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




// function load_template($name)
// {

//     // include $_SERVER['DOCUMENT_ROOT'] . "/assets/_templates/$name.php"; //not consider //super global

//     // for development
//     include $_SERVER['DOCUMENT_ROOT'] . "/vacsoft-web2/vacsoftteck/assets/_templates/$name.php"; //not consider //super global
// }
// function load_templatejs($name)
// {

//     // include $_SERVER['DOCUMENT_ROOT'] . "/assets/_templates/$name.js"; //not consider //super global


//     //    for development
//     include $_SERVER['DOCUMENT_ROOT'] . "/vacsoft-web2/vacsoftteck/assets/_templates/$name.js"; //not consider //super global


// }
