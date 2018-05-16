<?php

namespace Demv\Werte\Bedarf\Thema;

use Demv\Werte\Value;

/**
 * Class Bedarfsthema
 * @package Demv\Werte\Bedarf\Thema
 */
class Bedarfsthema extends Value implements BedarfthemaInterface
{
    /**
     * @var array
     */
    private $spartenIds;

    /**
     * @var string|null
     */
    private $displayname;

    /**
     * Bedarfsthema constructor.
     *
     * @param int         $identifier
     * @param string      $name
     * @param array       $spartenids
     * @param string|null $displayname
     */
    public function __construct(int $identifier, string $name, array $spartenids, string $displayname = null)
    {
        parent::__construct($identifier, $name);
        $this->spartenIds  = $spartenids;
        $this->displayname = $displayname;
    }

    /**
     * @return array
     */
    public function getSpartenIds(): array
    {
        return $this->spartenIds;
    }

    /**
     * @return string
     */
    public function getDisplayname(): string
    {
        if ($this->displayname === null) {
            return $this->getName();
        }

        return $this->displayname;
    }
}
