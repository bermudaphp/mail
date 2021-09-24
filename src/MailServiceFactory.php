<?php

namespace Bermuda\Mail;

use PHPMailer\PHPMailer\PHPMailer;
use Psr\Container\ContainerInterface;

final class MailServiceFactory
{
    public function __invoke(ContainerInterface $container): MailService
    {
        return new MailService(
            $container->has(PHPMailer::class) ?
            $container->get(PHPMailer::class) : new PHPMailer()
        );
    }
}
