<?php

namespace LojaVirtual\RegistroBR;

interface CommandInterface
{
    public function xml(): string;
    public function execute(): ?string;
}