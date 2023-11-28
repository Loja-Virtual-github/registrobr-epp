<?php

namespace LojaVirtual\RegistroBR;

interface TemplateInterface
{
    public function xml(): string;
    public function getTemplateName(): string;
}
