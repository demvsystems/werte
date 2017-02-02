<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 02.02.17
 * Time: 14:41
 */

namespace Demv\Werte\Conversion;

use Demv\Werte\ProviderInterface;
use Demv\Werte\ValueInterface;

/**
 * Class DataList
 * @package Demv\Werte\Conversion
 */
final class DataList
{
    /**
     * @param ValueInterface[] $values
     *
     * @return array
     */
    public static function fromArray(array $values)
    {
        $data = [];
        foreach ($values as $item) {
            $data[$item->getId()] = $item->getName();
        }

        return $data;
    }

    /**
     * @param ProviderInterface $provider
     *
     * @return array
     */
    public static function fromProvider(ProviderInterface $provider)
    {
        return self::fromArray($provider->getAll());
    }
}