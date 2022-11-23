<?php
$dom= new DOMDocument('1.0','utf-8');

$raiz= $dom->createElement("Mundial");
$dom->appendChild($raiz);

//Añadimos un equipo y sus hijos
$equipo= $raiz->appendChild($dom->createElement("Equipo"));
$equipo->appendChild($dom->createElement("Nombre","España"));
$equipo->appendChild($dom->createElement("Entrenador","Luis Enrique"));

$equipo= $raiz->appendChild($dom->createElement("Equipo"));
$equipo->appendChild($dom->createElement("Nombre","Francia"));
$equipo->appendChild($dom->createElement("Entrenador","Dechams"));

$equipo= $raiz->appendChild($dom->createElement("Equipo"));
$equipo->appendChild($dom->createElement("Nombre","Italia"));
$equipo->appendChild($dom->createElement("Entrenador","Donatello"));

// guardamos el DOM en un documento
if ($dom->save('mundial3.xml')) {
    echo "Todo bien";
}else{
    echo "Fatal";
}

?>