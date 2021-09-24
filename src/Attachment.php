<?php

namespace Bermuda\Mail;

final class Attachment
{
    public const ENCODING_7BIT = '7bit';
    public const ENCODING_8BIT = '8bit';
    public const ENCODING_BASE64 = 'base64';
    public const ENCODING_BINARY = 'binary';
    public const ENCODING_QUOTED_PRINTABLE = 'quoted-printable';
    public const DISPOSITION_ATTACHMENT = 'attachment';
    private string $path, $filename, $type, $encoding, $disposition;

    public function __construct(string $path, string $filename = '',
                                string $type = '', string $encoding = self::ENCODING_BASE64, string $disposition = self::DISPOSITION_ATTACHMENT)
    {
        $this->path = $path;
        $this->filename = $filename;
        $this->type = $type;
        $this->encoding = $encoding;
        $this->disposition = $disposition;
    }

    /**
     * @return string
     */
    public function getPath(): string
    {
        return $this->path;
    }

    /**
     * @return string
     */
    public function getFilename(): string
    {
        return $this->filename;
    }

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @return string
     */
    public function getEncoding(): string
    {
        return $this->encoding;
    }

    /**
     * @return string
     */
    public function getDisposition(): string
    {
        return $this->disposition;
    }
}
