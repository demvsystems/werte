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
 *
 * @package Demv\Werte\Conversion
 */
final class DataList
{
    /**
     * Kovertiert das übergebene Value-Array in ein Array der Form ['id' => 'name']
     *
     * @param ValueInterface[] $values
     *
     * @return array
     *          ['id' => 'name']
     */
    public static function fromArray(array $values): array
    {
        $data = [];
        foreach ($values as $item) {
            $data[$item->getId()] = $item->getName();
        }

        return $data;
    }

    /**
     * Kovertiert das Value-Array der getAll-Methode in ein Array der Form ['id' => 'name']
     *
     * @param ProviderInterface $provider
     *
     * @return array
     *          ['id' => 'name']
     */
    public static function fromProvider(ProviderInterface $provider): array
    {
        return self::fromArray($provider->getAll());
    }
}