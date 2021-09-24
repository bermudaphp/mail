<?php

namespace Bermuda\Mail;

use Bermuda\Detector\FinfoDetector;
use Bermuda\Detector\MimeTypes\Text;

final class Body implements Stringable
{
    private string $content;
   
    public function __construct(string $content)
    {
        $this->content = $content
    }

    public function __toString(): string
    {
        return $this->content;
    }

    /**
     * @return bool
     */
    public function isHtml(): bool
    {
        static $result = null;
        
        if ($result === null) {
            return $result = (new FinfoDetector)
                ->detectMimeType($this->content) === Text::html;
        }
        
        return $result;
    }
}
