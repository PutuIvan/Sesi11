<?php
    $dta[0]["NAMA"] = "Ivan";
    $dta[0]["TGL_LAHIR"] ="2004-01-22";
    $dta[0]["JKEL"] = "L";
    $dta[0]["ASAL"] = "Ubung";
    $dta[0]["HOBI"] = "Mendaki";
    
    $dta[1]["NAMA"] = "Komet";
    $dta[1]["TGL_LAHIR"] ="2004-04-4";
    $dta[1]["JKEL"] = "L";
    $dta[1]["ASAL"] = "Batubulan";
    $dta[1]["HOBI"] = "Fotography";

    $dta[2]["NAMA"] = "Bintang";
    $dta[2]["TGL_LAHIR"] ="2003-03-3";
    $dta[2]["JKEL"] = "P";
    $dta[2]["ASAL"] = "Kesiman";
    $dta[2]["HOBI"] = "Melali";

    $dta[3]["NAMA"] = "Alex";
    $dta[3]["TGL_LAHIR"] ="2001-11-1";
    $dta[3]["JKEL"] = "L";
    $dta[3]["ASAL"] = "Renon";
    $dta[3]["HOBI"] = "Main Game";
    header("Content-type: application/json; charset=utf-8");
    echo json_encode($dta);

?>