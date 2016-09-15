<?php
/**
 * Created by PhpStorm.
 * User: Vikram
 * Date: 15/09/2016
 * Time: 2:38 AM
 */
require_once ("trekProviders.php");

$q = $_REQUEST["q"];

$type = $_REQUEST["t"];

$trekProvidersArray = getAllTrekProviders();
echo var_dump($trekProvidersArray);
$hint = "";

// lookup all hints from array if $q is different from ""
if ($q !== "") {
    $q = strtolower($q);
    $len=strlen($q);
    foreach($trekProvidersArray as $name) {
        if (stristr($q, substr($name, 0, $len))) {
            if ($hint === "") {
                $hint = $name;
            } else {
                $hint .= ", $name";
            }
        }
    }
}

// Output "no suggestion" if no hint was found or output correct values
echo $hint === "" ? "no suggestion" : $hint;
?>