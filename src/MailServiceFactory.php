<?php

namespace App\Mail;

use PHPMailer\PHPMailer\PHPMailer;
use Psr\Container\ContainerInterface;

/**
 * Class MailServiceFactory
 * @package App\Mail
 */
class MailServiceFactory
{
    public function __invoke(ContainerInterface $container): MailService
    {
        if ($container->has(PHPMailer::class))
        {
            $mailer = $container->get(PHPMailer::class);
        }

        return new MailService($mailer ?? new PHPMailer());
    }
}