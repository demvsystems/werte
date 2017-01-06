<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 06.01.17
 * Time: 11:57
 */

namespace Demv\Werte;

abstract class BaseProvider implements ProviderInterface
{
    /**
     * @param $id
     *
     * @return Value
     */
    public function getOne($id): Value
    {
        foreach ($this->getAll() as $value) {
            if ($value->getId() == $id) {
                return $value;
            }
        }

        return null;
    }
}