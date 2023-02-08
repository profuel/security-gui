<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Zed\SecurityGui\Communication\Security;

use Generated\Shared\Transfer\UserTransfer;

class User implements UserInterface
{
    /**
     * @var \Generated\Shared\Transfer\UserTransfer
     */
    protected $userTransfer;

    /**
     * @var string
     */
    protected $username;

    /**
     * @var string|null
     */
    protected $password;

    /**
     * @var array<string>
     */
    protected $roles = [];

    /**
     * @param \Generated\Shared\Transfer\UserTransfer $userTransfer
     * @param array<string> $roles
     */
    public function __construct(UserTransfer $userTransfer, array $roles = [])
    {
        $this->userTransfer = $userTransfer;
        /** @var string $username */
        $username = $userTransfer->requireUsername()->getUsername();
        $this->username = $username;
        $this->password = $userTransfer->getPassword();
        $this->roles = $roles;
    }

    /**
     * @return array<string>
     */
    public function getRoles(): array
    {
        return $this->roles;
    }

    /**
     * @return string|null
     */
    public function getSalt(): ?string
    {
        return null;
    }

    /**
     * @return string
     */
    public function getUsername(): string
    {
        return $this->username;
    }

    /**
     * @return string|null
     */
    public function getPassword(): ?string
    {
        return $this->password;
    }

    /**
     * @return void
     */
    public function eraseCredentials(): void
    {
    }

    /**
     * @return \Generated\Shared\Transfer\UserTransfer
     */
    public function getUserTransfer(): UserTransfer
    {
        return $this->userTransfer;
    }
}
