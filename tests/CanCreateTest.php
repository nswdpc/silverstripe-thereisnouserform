<?php

declare(strict_types=1);

namespace NSWDPC\Utilities\ThereIsNoUserform\Tests;

use NSWDPC\Utilities\ThereIsNoUserform\UserDefinedFormPageExtension;
use SilverStripe\Dev\SapphireTest;
use SilverStripe\UserForms\Model\UserDefinedForm;

/**
 * Test can create configuration
 * @author James
 */
class CanCreateTest extends SapphireTest
{
    protected $usesDatabase = true;

    public function testCannotCreateUserDefinedForm(): void
    {
        $inst = UserDefinedForm::create();
        $this->assertTrue($inst->hasExtension(UserDefinedFormPageExtension::class));
        $this->assertFalse($inst->canCreate());
    }


}
