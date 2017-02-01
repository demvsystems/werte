<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 01.02.17
 * Time: 11:45
 */

namespace Demv\Werte\Person\Beziehung\Beruflich;

use Demv\Werte\Person\Beziehung\BeziehungsTypInterface;

/**
 * Class FirmaVonInhaber
 * @package Demv\Werte\Person\Beziehung\Beruflich
 */
final class FirmaVonInhaber extends BeruflicheBeziehung implements BeziehungsTypInterface
{
    const ID = 13;

    public function __construct()
    {
        parent::__construct(self::ID, 'Firma von (Inhaber)');
    }
}