<?php

declare(strict_types=1);

namespace Praftr\WimiApiClient\Request\Main\Account;

use Praftr\WimiApiClient\Request\AbstractRequest;

class SetSettingsRequest extends AbstractRequest
{
    public ?string $companyName = "";

    public int $localeId = 0;

    public ?string $companySize = "";

    public ?string $website = "";

    public int $maxFileVersion = 0;

    public ?string $incomingMailAs = "";

    public ?bool $adminUserCreationDisabled = false;

    public ?bool $adminCategoryCreationDisabled = false;

    public ?bool $adminGroupCreationDisabled = false;

    public ?bool $sharingActionsDisabled = false;

    public ?bool $autoTrashDeletion = false;

    public ?bool $tagCreationDisabled = false;

    public int $communityCreationMinPrivilege = 0;

    public ?bool $mailUploadDisabled = false;

    public ?bool $passwordPolicy = false;

    public ?int $docNotifType = 1;

    public int $defaultProjectQuota = 0;

    public int $interest = 0;

    public ?bool $allowSupportIntervention = false;

    public ?string $welcomeInviteWish = "";

    public ?int $managerVisibilityRights = 1;

    public int $userVisibilityOption = 0;

    public ?bool $removeLogo = false;

    public ?string $name = "";

    public int $size = 0;

    public function __construct(
        protected readonly int $accountId,
        protected readonly int $userId,
    ) {
        parent::__construct('main.account.SetSettings');
    }
}
