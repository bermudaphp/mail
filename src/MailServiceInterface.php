<?php

namespace Bermuda\Mail;

/**
 * Interface MailServiceInterface
 * @package Bermuda\Mail
 */
interface MailServiceInterface
{
    /**
     * @param Body $body
     * @return MailServiceInterface
     */
    public function withBody(Body $body): MailServiceInterface ;

    /**
     * @param Address|Address[] $addresses
     * @return MailServiceInterface
     */
    public function withAddresses($addresses): MailServiceInterface ;

    /**
     * @param Attachment|Attachment[] $attachments
     * @return MailServiceInterface
     */
    public function withAttachments($attachments): MailServiceInterface ;

    /**
     * @param string $subject
     * @return MailServiceInterface
     */
    public function withSubject(string $subject): MailServiceInterface ;

    /**
     * @param string|null $subject
     * @param Body|null $body
     * @param null|Address|Address[] $addresses
     * @throws \RuntimeException
     */
    public function send(?string $subject = null, ?Body $body = null, $addresses = null): void ;
}
