<?php

declare(strict_types=1);

namespace Demv\Werte\Person\Beziehung;

use Demv\Werte\Value;

abstract class Beziehung extends Value implements BeziehungsTypInterface
{
    use BeziehungTextTrait;

    /**
     * @param int         $id
     * @param string      $name
     * @param string|null $text
     */
    public function __construct(int $id, string $name, ?string $text = null)
    {
        parent::__construct($id, $name);
        if ($text !== null) {
            $this->setText($text);
        }
    }
}
