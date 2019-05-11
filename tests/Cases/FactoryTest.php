<?php

declare(strict_types=1);
/**
 * This file is part of limx.
 *
 * @contact  limingxin@swoft.org
 */

namespace Test\Cases;

use Xin\Mta\Factory;
use Xin\Mta\App\Application;

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
