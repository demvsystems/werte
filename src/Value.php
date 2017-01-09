<?php

/**
 * Created by PhpStorm.
 * User: alex
 * Date: 06.01.17
 * Time: 11:28
 */
namespace Demv\Werte;

class Value
{
    /**
     * @var int
     */
    protected $id;

    /**
     * @var string
     */
    protected $name;

    /**
     * Value constructor.
     *
     * @param int    $id
     * @param string $name
     */
    public function __construct(int $id, string $name)
    {
        $this->id   = $id;
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param Value $value
     *
     * @return bool
     */
    public function equals(Value $value): bool
    {
        return $this->getId() === $value->getId();
    }

}