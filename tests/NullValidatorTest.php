<?php
/*
 * This file is part of the nia framework architecture.
 *
 * (c) Patrick Ullmann <patrick.ullmann@nat-software.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
declare(strict_types = 1);
namespace Test\Nia\Validation;

use PHPUnit_Framework_TestCase;
use Nia\Validation\NullValidator;

/**
 * Unit test for \Nia\Validation\NullValidator.
 */
class NullValidatorTest extends PHPUnit_Framework_TestCase
{

    /**
     * @covers \Nia\Validation\NullValidator::validate
     */
    public function testValidate()
    {
        $validator = new NullValidator();

        $this->assertSame([], $validator->validate('foo bar'));
    }
}

