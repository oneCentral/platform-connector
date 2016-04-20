<?php

League\FactoryMuffin\Facade::define('WebservicesNl\Connector\Platform\Webservices\Config', [
    'connectionTimeout' => 'numberBetween|10;120',
    'password'          => 'word',
    'userName'          => 'userName',
    'retryMinutes'      => 'numberBetween|60;120',
    'responseTimeout'   => 'numberBetween|20;30',
]);

League\FactoryMuffin\Facade::define('WebservicesNl\Soap\Client\SoapConfig', [
    'converter'      => function () {
        return new \WebservicesNl\Soap\Config\Platform\Webservices\Converter();
    },
    'endPoints'      => WebservicesNl\Soap\Client\SoapConfig::getEndPoints(),
    'platformConfig' => function () {
        return League\FactoryMuffin\Facade::instance('WebservicesNl\Connector\Platform\Webservices\Config');
    },
    'soapHeaders'    => [],
]);
