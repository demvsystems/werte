<?php

/**
 * Created by PhpStorm.
 * User: alex
 * Date: 06.01.17
 * Time: 11:14
 */
namespace Demv\Werte\Person\Anrede;

use Demv\Werte\AbstractProvider;

final class Anreden extends AbstractProvider
{
    const HERR  = 1;
    const FRAU  = 2;
    const FIRMA = 3;
    const LEER  = 4;

    /**
     * @return Anrede[]
     */
    public function getAll(): array
    {
        return [
            new Anrede(self::HERR, 'Herr'),
            new Anrede(self::FRAU, 'Frau'),
            new Anrede(self::FIRMA, 'Firma'),
            new Anrede(self::LEER, ''),
        ];
    }

}