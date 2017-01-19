<?php
namespace Demv\Werte\Tests;

/**
 * Created by PhpStorm.
 * User: alex
 * Date: 09.01.17
 * Time: 17:13
 */
use Demv\Werte\ProviderInterface;
use Demv\Werte\ValueInterface;

trait ProviderTestTrait
{
    private function checkGetOne(ProviderInterface $provider, string $classname)
    {
        /**
         * @var ValueInterface $instance
         */
        $instance = new $classname;
        $this->assertNotEmpty($provider->getOne($instance->getId()));
        $this->assertTrue($provider->exists($instance->getId()));
        $value = $provider->getOne($instance->getId());
        $this->assertSame($instance->getId(), $value->getId());
        $this->assertInstanceOf($classname, $value);
    }
}