<?php

declare(strict_types=1);
/**
 * This file is part of limx.
 *
 * @contact  l@hyperf.io
 */
namespace Test\Cases;

use Xin\Mta\App\Application;
use Xin\Mta\Factory;

/**
 * @internal
 * @coversNothing
 */
class FactoryTest extends AbstractTestCase
{
    public function testFactory()
    {
        $app = Factory::app([]);

        $this->assertInstanceOf(Application::class, $app);
    }
}
