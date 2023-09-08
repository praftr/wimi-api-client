<?php

declare(strict_types=1);

namespace Praftr\WimiApiClient\Request\Main\Account;

use Praftr\WimiApiClient\Request\AbstractRequest;

class EditCategoryRequest extends AbstractRequest
{
    public string $categoryName;

    public function __construct(
        protected readonly int $accountId,
        protected readonly int $userId,
        protected readonly int $categoryId,
    ) {
        parent::__construct('main.account.EditCategory');
    }
}
