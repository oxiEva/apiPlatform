<?php
declare(strict_types=1);

namespace App\Api\Action\User;

use App\Entity\User;
use App\Service\User\ActiveAccountService;
use Symfony\Component\HttpFoundation\Request;

class ActivateAccount
{
    private ActiveAccountService $activeAccountService;

    public function __construct(ActiveAccountService $activeAccountService)
    {
        $this->activeAccountService = $activeAccountService;
    }

    public function __invoke(Request $request, string $id): User
    {
        return $this->activeAccountService->activate($request, $id);
    }
}
