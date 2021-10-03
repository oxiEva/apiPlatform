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

    public const MESSAGE_INACTIVE = 'User with %s and %s token not found. ';

    public static function fromEmail(string $email): \Exception
    {
        return new self(sprintf(self::MESSAGE, $email));
    }

    public static function fromUserIdAndToken(string $id, string $token): \Exception
    {
        return new self(sprintf(self::MESSAGE_INACTIVE, $id, $token));
    }

    public static function fromUserIdAndResetPasswordToken(string $id, string $resetPasswordToken): \Exception
    {
        return new self(sprintf('User with id %s and resetPasswordToken %s not found', $id, $resetPasswordToken));
    }

}
