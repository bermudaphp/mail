<?php

namespace Bermuda\Mail;

use Bermuda\Detector\FinfoDetector;
use Bermuda\Detector\MimeTypes\Text;

/**
 * @property-read string $content
 * @property-read string $mimeType
 */
final class Body implements \Stringable
{
    private string $content;
    private ?string $mimeType = null;

    public function __construct(string $content)
    {
        $this->content = $content;
    }
    
    public function __get(string $name)
    {
        switch ($name) {
            case 'content': return $this->content;
            case 'mimeType': return $this->getMimeType();
        }

        return null;
    }

    public function __toString(): string
    {
        return $this->content;
    }

    /**
     * @return bool
     */
    public function getMimeType(): bool
    {
        if ($this->mimeType === null) {
            return $this->mimeType = (new FinfoDetector)->detectMimeType($this->content);
        }

        return $this->mimeType;
    }
}
