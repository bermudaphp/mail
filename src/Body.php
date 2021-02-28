<?php

namespace App\Mail;

use Bermuda\String\Str;
use Bermuda\String\Stringable;

/**
 * Class Body
 * @package App\Mail
 */
final class Body implements Stringable
{
    private string $content;
    private ?bool $isHTML = null;

    public function __construct(string $content, bool $isHTML = null)
    {
        $this->content = $content; $this->isHTML = $isHTML;
    }

    public function __toString(): string
    {
        return $this->content;
    }

    /**
     * @return bool
     */
    public function isHTML(): bool
    {
        if ($this->isHTML == null)
        {
            $this->isHTML = Str::isHTML($this->content);
        }

        return $this->isHTML;
    }
}