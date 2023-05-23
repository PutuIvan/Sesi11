<?php
    $dta["NAMA"] = "Ivan";
    $dta["TGL_LAHIR"] ="2004-01-22";
    $dta["JKEL"] = "L";
    $dta["ASAL"] = "Ubung";
    $dta["HOBI"] = "Mendaki";
    
    header("Content-type: application/json; charset=utf-8");
    echo json_encode($dta);

?>