<?php

/**
 * Created by PhpStorm.
 * User: alex
 * Date: 06.01.17
 * Time: 11:20
 */
namespace Demv\Werte;

interface ProviderInterface
{

    /**
     * Gibt ein Array aller Werte zurück
     *
     * @return Value[]
     */
    public function getAll(): array;

    /**
     * Gibt einen Eintrag anhand eines Identifiers zurück
     *
     * @param $id
     *
     * @return mixed
     */
    public function getOne($id): Value;

}