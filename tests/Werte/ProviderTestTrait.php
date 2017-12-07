<?php

namespace Demv\Werte\Tests;

use Demv\Werte\ProviderInterface;
use Demv\Werte\ValueInterface;

trait ProviderTestTrait
{
    private function checkGetOne(ProviderInterface $provider, string $classname): void
    {
        /**
         * @var ValueInterface $instance
         */
        $instance = new $classname();
        $this->assertNotEmpty($provider->getOne($instance->getId()));
        $this->assertTrue($provider->exists($instance->getId()));
        $value = $provider->getOne($instance->getId());
        $this->assertSame($instance->getId(), $value->getId());
        $this->assertInstanceOf($classname, $value);
    }
}