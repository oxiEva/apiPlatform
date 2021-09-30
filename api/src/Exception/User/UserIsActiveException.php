<?php
declare(strict_types=1);

namespace App\Exception\User;

use Symfony\Component\HttpKernel\Exception\ConflictHttpException;

class UserIsActiveException extends ConflictHttpException
{
    public const MESSAGE = 'User with email %s is already active';

    public static function fromEmail(string $email): self
    {
        return new self(sprintf(self::MESSAGE, $email));
    }

}
