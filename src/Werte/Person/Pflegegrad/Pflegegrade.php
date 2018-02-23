<?php

namespace Demv\Werte\Person\Pflegegrad;

use Demv\Werte\AbstractProvider;
use Demv\Werte\Person\Pflegegrad\Pflegegrade\KeinPflegegrad;
use Demv\Werte\Person\Pflegegrad\Pflegegrade\Pflegegrad1;
use Demv\Werte\Person\Pflegegrad\Pflegegrade\Pflegegrad2;
use Demv\Werte\Person\Pflegegrad\Pflegegrade\Pflegegrad3;
use Demv\Werte\Person\Pflegegrad\Pflegegrade\Pflegegrad4;
use Demv\Werte\Person\Pflegegrad\Pflegegrade\Pflegegrad5;

/**
 * Class Pflegegrade
 * @package Demv\Werte\Person\Pflegegrad
 */
final class Pflegegrade extends AbstractProvider
{
    /**
     * Pflegegrade constructor.
     */
    public function __construct()
    {
        $this->appendMember(new KeinPflegegrad());
        $this->appendMember(new Pflegegrad1());
        $this->appendMember(new Pflegegrad2());
        $this->appendMember(new Pflegegrad3());
        $this->appendMember(new Pflegegrad4());
        $this->appendMember(new Pflegegrad5());
    }
}
