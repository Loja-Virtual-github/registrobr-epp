<?php

namespace LojaVirtual\RegistroBR\Resource;

use LojaVirtual\RegistroBR\EppClient;
use LojaVirtual\RegistroBR\Exception\RegistroBRException;
use LojaVirtual\RegistroBR\Helper;

abstract class ResourceFactory
{

    /**
     * @param string $resourceName
     * @param array $arguments
     * @return ResourceInterface
     * @throws RegistroBRException
     */
    public static function factory(EppClient $eppClient, string $resourceName, array $arguments = []): ResourceInterface
    {
        $resourceNamespace = Helper::buildNamespace($resourceName, 'Resource');
        return new $resourceNamespace($eppClient, $arguments);
    }
}