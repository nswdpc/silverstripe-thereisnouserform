<?php

declare(strict_types=1);

namespace NSWDPC\Utilities\ThereIsNoUserform;

use SilverStripe\ORM\DataExtension;

/**
 * @author James
 * @extends \SilverStripe\ORM\DataExtension<(\SilverStripe\UserForms\Model\UserDefinedForm & static)>
 */
class UserDefinedFormPageExtension extends DataExtension
{
    public function canCreate($member, $context = [])
    {
        return false;
    }

}
