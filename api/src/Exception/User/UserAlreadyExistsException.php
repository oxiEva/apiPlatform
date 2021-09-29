<?php
declare(strict_types=1);

namespace App\Exception\User;

use Symfony\Component\HttpKernel\Exception\ConflictHttpException;

class UserAlreadyExistsException extends ConflictHttpException
{
    private const MESSAGE = 'User with email %s already exists';

    public static function fromEmail(string $email): self
    {
        throw new self(\sprintf(self::MESSAGE, $email));
    }
}
