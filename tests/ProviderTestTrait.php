<?php
namespace Demv\Werte\Tests;

/**
 * Created by PhpStorm.
 * User: alex
 * Date: 09.01.17
 * Time: 17:13
 */
use Demv\Werte\ProviderInterface;

trait ProviderTestTrait
{
    private function checkGetOne(ProviderInterface $provider, $id)
    {
        $this->assertNotEmpty($provider->getOne($id));
        $this->assertTrue($provider->exists($id));
        $value = $provider->getOne($id);
        $this->assertSame($id, $value->getId());
    }
}