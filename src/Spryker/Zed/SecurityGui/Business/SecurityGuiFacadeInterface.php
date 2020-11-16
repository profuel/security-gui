<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Zed\SecurityGui\Business;

use Generated\Shared\Transfer\UserTransfer;

interface SecurityGuiFacadeInterface
{
    /**
     * Specification:
     * - Authenticates a user.
     * - Updates User's last login date.
     *
     * @api
     *
     * @param \Generated\Shared\Transfer\UserTransfer $userTransfer
     *
     * @return void
     */
    public function authenticateUser(UserTransfer $userTransfer): void;
}
