<?php

namespace Demv\Werte\Person\Beziehung;

trait BeziehungTextTrait
{
    /**
     * @var string
     */
    private $text;

    /**
     * @return string|null
     */
    public function getText(): ?string
    {
        return $this->text;
    }

    /**
     * @param string $text
     */
    public function setText(string $text): void
    {
        $this->text = $text;
    }

    /**
     * @return bool
     */
    public function hasText(): bool
    {
        return $this->text !== null;
    }
}
