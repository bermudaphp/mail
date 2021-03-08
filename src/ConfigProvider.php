<?php

namespace Bermuda\Mail;

final class ConfigProvider extends \Bermuda\Config\ConfigProvider
{
    protected function getFactories(): array
    {
        return [
            MailServiceInterface::class => MailServiceFactory::class,
            PHPMailer\PHPMailer\PHPMailer::class => PHPMailerFactory::class,
        ];
    }
}
