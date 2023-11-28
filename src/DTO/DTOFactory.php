<?php

namespace LojaVirtual\RegistroBR\DTO;

use LojaVirtual\RegistroBR\Exception\RegistroBRException;
use LojaVirtual\RegistroBR\Helper;

abstract class DTOFactory
{
    /**
     * @throws RegistroBRException
     */
    public static function factory(string $dtoName, array $arguments = []): DTOInterface
    {
        $dtoNamespace = Helper::buildNamespace($dtoName, 'DTO');
        return new $dtoNamespace($arguments);
    }
}