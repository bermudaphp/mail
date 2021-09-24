<?php

namespace Bermuda\Mail;

use Stringable;

/**
 * @property-read string $email
 * @property-read string $name
 */
final class Address implements Stringable
{
    private string $email, $name;

    public function __construct(string $email, string $name = '')
    {
        $this->email = $email;
        $this->name = $name;

        if (filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
            throw new \InvalidArgumentException('Invalid email: '. $email);
        }
    }

    public function __get(string $name)
    {
        switch ($name){
            case 'name': return $this->name;
            case 'email': return $this->email;
        }

        return null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->email;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
}
