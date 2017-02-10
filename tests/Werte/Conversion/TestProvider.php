<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 02.02.17
 * Time: 15:04
 */

namespace Demv\Werte\Tests\Conversion;

use Demv\Werte\AbstractProvider;
use Demv\Werte\ValueInterface;

final class TestProvider extends AbstractProvider
{
    /**
     * TestProvider constructor.
     *
     * @param ValueInterface[] $values
     */
    public function __construct(array $values)
    {
        foreach ($values as $value) {
            $this->appendMember($value);
        }
    }

}