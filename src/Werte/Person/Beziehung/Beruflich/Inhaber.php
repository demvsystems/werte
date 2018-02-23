<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 01.02.17
 * Time: 11:46
 */

namespace Demv\Werte\Person\Beziehung\Beruflich;

use Demv\Werte\Person\Beziehung\BeziehungsTypInterface;

/**
 * Class Inhaber
 * @package Demv\Werte\Person\Beziehung\Beruflich
 */
final class Inhaber extends BeruflicheBeziehung implements BeziehungsTypInterface
{
    const ID = 12;

    public function __construct()
    {
        parent::__construct(self::ID, 'Inhaber');
    }
}
