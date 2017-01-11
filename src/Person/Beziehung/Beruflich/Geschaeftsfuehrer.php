<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 09.01.17
 * Time: 16:53
 */

namespace Demv\Werte\Person\Beziehung\Beruflich;

final class Geschaeftsfuehrer extends BeruflicheBeziehung
{
    const ID = 6;

    public function __construct()
    {
        parent::__construct(self::ID, 'Geschäftsführer');
    }

}