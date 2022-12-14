<?php

require_once "vendor\autoload.php";

use cebpereira\phpCep\Search2;

$busca = new Search2;

$resultado = $busca -> getAddressFromZipcode("45208591");

print_r($resultado);