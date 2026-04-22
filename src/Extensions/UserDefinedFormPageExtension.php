<?php

declare(strict_types=1);

namespace NSWDPC\Utilities\ThereIsNoUserform;

use SilverStripe\Core\Extension;

/**
 * @author James
 * @extends \SilverStripe\Core\Extension<(\SilverStripe\UserForms\Model\UserDefinedForm & static)>
 */
class UserDefinedFormPageExtension extends Extension
{
    public function canCreate($member, $context = []): bool
    {
        return false;
    }

}
