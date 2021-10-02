<?php
declare(strict_types=1);

namespace Mailer\Templating;

abstract class TwigTemplate
{
    public const USER_REGISTER = 'user/register.html.twig';
    public const REQUEST_RESET_PASSWORD = 'user/request-reset-password.html.twig';
}
