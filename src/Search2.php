<?php

namespace cebpereira\phpCep;

class Search2
{
    //ex: https://brasilapi.com.br/api/cep/v1/{cep}
    private $url = "https://brasilapi.com.br/api/cep/v1/";

    public function getAddressFromZipcode(string $zipCode): array
    {
        $zipCode = preg_replace('/[^0-9]/im', '', $zipCode);

        $get = file_get_contents($this -> url . $zipCode);

        return (array) json_decode($get);
    }
}
