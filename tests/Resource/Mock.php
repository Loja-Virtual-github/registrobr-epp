<?php

namespace LojaVirtual\RegistroBR\Resource;

use LojaVirtual\RegistroBR\CommandFactory;
use LojaVirtual\RegistroBR\EppClient;
use LojaVirtual\RegistroBR\Exception\RegistroBRException;
use LojaVirtual\RegistroBR\Template;
use LojaVirtual\RegistroBR\TemplateInterface;

class Mock extends AbstractResource
{
    public function getClassName(): string
    {
        return parent::getClassName();
    }

    public function getTemplateNameByMethod(string $method): string
    {
        return parent::getTemplateNameByMethod($method);
    }

    /**
     * @throws RegistroBRException
     */
    public function factoryTemplateByMethodName(string $methodName, array $arguments): TemplateInterface
    {
        return new Template(
            $this->getTemplateNameByMethod($methodName),
            array_merge($this->arguments, $arguments)
        );
    }

    /**
     * @throws RegistroBRException
     */
    public function __call(string $method, array $arguments = [])
    {
        $template = $this->factoryTemplateByMethodName($method, $arguments);
        return CommandFactory::factory($this->eppClient, $template)->execute();
    }
}
