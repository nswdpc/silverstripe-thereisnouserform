<?php

namespace NSWDPC\Utilities\ThereIsNoUserform;

use SilverStripe\ORM\DataExtension;

/**
 * @author James
 */
class UserDefinedFormPageExtension extends DataExtension {

    public function canCreate($member, $context = []) {
        return false;
    }

}
