<?php

namespace Bermuda\Mail;

use Bermuda\String\Stringable;

/**
 * Class Address
 * @package Bermuda\Mail
 */
final class Address implements Stringable
{
    private string $value, $name;

    public function __construct(string $value, string $name = '')
    {
        $this->value = $value; $this->name = $name;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->value;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
}
