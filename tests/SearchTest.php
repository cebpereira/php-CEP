<?php

require 'vendor\autoload.php';

use PHPUnit\Framework\TestCase;
use cebpereira\phpCep\Search;

class SearchTest extends TestCase{

    /**
    *   @dataProvider dadosTeste
    */

    public function testGetAddressFromZipcodeDefaultUsage(string $input, array $esperado){
        $resultado = new Search;
        $resultado = $resultado -> getAddressFromZipcode($input);

        /*
        Teste utilizando apenas um resultado esperado
        $esperado = [
            "cep" => "01001-000",
            "logradouro" => "Praça da Sé",
            "complemento" => "lado ímpar",
            "bairro" => "Sé",
            "localidade" => "São Paulo",
            "uf" => "SP",
            "ibge" => "3550308",
            "gia" => "1004",
            "ddd" => "11",
            "siafi" => "7107",
        ];
        */

        $this -> assertEquals($esperado, $resultado);
    }

    //Teste utilizando múltiplos resultados esperados
    public function dadosTeste(){
        return[
            "Endereço Teste Default" => [
                "01001000",
                [
                    "cep" => "01001-000",
                    "logradouro" => "Praça da Sé",
                    "complemento" => "lado ímpar",
                    "bairro" => "Sé",
                    "localidade" => "São Paulo",
                    "uf" => "SP",
                    "ibge" => "3550308",
                    "gia" => "1004",
                    "ddd" => "11",
                    "siafi" => "7107"
                ]
            ],

            "Endereço Teste Local" => [
                "45208591",
                [
                    "cep" => "45208-591",
                    "logradouro" => "Avenida Ministro Ilmar Nascimento Galvão",
                    "complemento" => "",
                    "bairro" => "Espírito Santo",
                    "localidade" => "Jequié",
                    "uf" => "BA",
                    "ibge" => "2918001",
                    "gia" => "",
                    "ddd" => "73",
                    "siafi" => "3661"
                ]
            ]
        ];

    }
};