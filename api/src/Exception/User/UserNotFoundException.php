<?php
declare(strict_types=1);

namespace App\Exception\User;

use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

/**
 * @throws UserNotFoundException
 */
class UserNotFoundException extends NotFoundHttpException
{
    public const MESSAGE = 'User with email %s is not found';

    public static function fromEmail(string $email): \Exception
    {
        return new self(sprintf(self::MESSAGE, $email));
    }
}
