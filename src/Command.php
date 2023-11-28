<?php

namespace LojaVirtual\RegistroBR;

use JsonException;
use LojaVirtual\RegistroBR\Exception\RegistroBRException;

readonly class Command implements CommandInterface
{
    public function __construct(
        private EppClient $eppClient,
        private TemplateInterface $template
    ) {
    }

    public function xml(): string
    {
        return $this->template->xml();
    }

    /**
     * @throws RegistroBRException
     */
    public function execute(): ?string
    {
        return $this->eppClient->executeCommand($this->template->xml());
    }
}