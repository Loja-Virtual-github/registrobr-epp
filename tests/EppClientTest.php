<?php

namespace LojaVirtual\RegistroBR;

use LojaVirtual\RegistroBR\Resource\ResourceFactory;

class EppClientTest extends BaseTesting
{
    public function testInitializeClient()
    {
        $eppClient = EppClient::factory('a', 'b');
        self::assertInstanceOf(EppClient::class, $eppClient);
    }
}