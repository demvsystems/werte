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
     * BaseBedarfsthema constructor.
     *
     * @param int    $identifier
     * @param string $name
     * @param array  $spartenids
     */
    public function __construct(int $identifier, string $name, array $spartenids)
    {
        parent::__construct($identifier, $name);
        $this->spartenIds = $spartenids;
    }

    /**
     * @return array
     */
    public function getSpartenIds(): array
    {
        return $this->spartenIds;
    }
}
