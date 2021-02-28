<?php

namespace Bermuda\Mail;

use PHPMailer\PHPMailer\PHPMailer;
use Psr\Container\ContainerInterface;
use function Bermuda\config;

/**
 * Class PHPMailerFactory
 * @package Bermuda\Mail
 */
class PHPMailerFactory
{
    public function __invoke(ContainerInterface $container): PHPMailer
    {
        $mailer = new PHPMailer();

        $config = config('mailer');

        $mailer->setFrom($config['from']['address'], $config['from']['name'] ?? '');

        if (isset($config['smtp']))
        {
            $mailer->isSMTP();
            $mailer->SMTPAuth = true;
            $mailer->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mailer->Host = $config['smtp']['host'];
            $mailer->Port = $config['smtp']['port'];
            $mailer->Username = $config['smtp']['username'];
            $mailer->Password = $config['smtp']['password'];
        }

        return $mailer;
    }
}
