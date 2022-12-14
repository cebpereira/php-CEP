<?php

namespace cebpereira\phpCep;
use cebpereira\phpCep\ws\ViaCep;

class Search
{
    public function getAddressFromZipcode(string $zipCode): array
    {
        $zipCode = preg_replace('/[^0-9]/im', '', $zipCode);

        return $this -> getFromServer($zipCode);
    }

    public function getFromServer(string $zipCode): array
    {
        $get = new ViaCep();

        return $get -> get($zipCode);
    }

    public function processData($data)
    {
        foreach ($data as $k => $v) {
            $data[$k] = trim($v);
        }

        return $data;
    }
}
