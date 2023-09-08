<?php

declare(strict_types=1);

namespace Praftr\WimiApiClient\Request\Main\User;

use Praftr\WimiApiClient\Request\AbstractRequest;

class SetNotificationSettingsRequest extends AbstractRequest
{
    public int $channel = 0;

    public int $documents = 0;

    public int $tasks = 0;

    public int $calendar = 0;

    public int $meetings = 0;

    public function __construct(
        protected readonly int $accountId,
        protected readonly int $userId,
    ) {
        parent::__construct('main.user.SetNotificationSettings');
    }
}
