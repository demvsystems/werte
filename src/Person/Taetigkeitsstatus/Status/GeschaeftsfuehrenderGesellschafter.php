<?php
/**
 * Created by PhpStorm.
 * User: sascha
 * Date: 19.01.17
 * Time: 17:30
 */

namespace Demv\Werte\Person\Taetigkeitsstatus\Status;

use Demv\Werte\Person\Taetigkeitsstatus\TaetigkeitsstatusInterface;
use Demv\Werte\Value;

/**
 * Class GeschaeftsfuehrenderGesellschafter
 *
 * Ist eine Mischung aus Angestellter und Selbstständiger und hier gibt es ein paar Besonderheiten
 * TODO: klären der Endgeldforzahlung. Der Geschäftsführende Gesellschafter kann sich befreien lassen.
 *
 * @package Demv\Werte\Person\Taetigkeitsstatus\Status
 */
final class GeschaeftsfuehrenderGesellschafter extends Value implements TaetigkeitsstatusInterface
{
    const ID = 11;

    public function __construct()
    {
        parent::__construct(self::ID, 'Geschäftsführender Gesellschafter');
    }

    /**
     * @return bool
     */
    public function isErwerbstaetig(): bool
    {
        return true;
    }

    /**
     * @return bool
     */
    public function isArbeitnehmer(): bool
    {
        return true;
    }

    /**
     * @return bool
     */
    public function hasEntgeltfortzahlung(): bool
    {
        return false;
    }
}