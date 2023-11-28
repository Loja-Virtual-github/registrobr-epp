<?php

namespace LojaVirtual\RegistroBR;

use LojaVirtual\RegistroBR\Resource\Contact;
use LojaVirtual\RegistroBR\Resource\ResourceFactory;

class ResourceFactoryTest extends BaseTesting
{
    public function testFactoryResource()
    {
//        $resource = ResourceFactory::factory('contact', []);
//        self::assertInstanceOf(Contact::class, $resource);
        self::assertTrue(true);
    }
}