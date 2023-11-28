<?php

namespace LojaVirtual\RegistroBR;

use LojaVirtual\RegistroBR\Exception\RegistroBRException;
use TemplateFactory;

abstract class CommandFactory
{
    /**
     * @throws RegistroBRException
     */
    public static function factory(
        EppClient $eppClient,
        TemplateInterface $template
    ): CommandInterface {
        return new Command($eppClient, $template);
    }
}
