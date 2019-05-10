<?php

declare(strict_types=1);
/**
 * This file is part of limx.
 *
 * @contact  limingxin@swoft.org
 */

namespace Test\Cases\H5;

use Xin\Mta\Factory;
use Xin\Mta\H5\Application;
use Test\Cases\AbstractTestCase;

/**
 * @internal
 * @coversNothing
 */
class PageTest extends AbstractTestCase
{
    public function testExample()
    {
        /** @var Application $app */
        $app = Factory::make('h5', [
            'app_id' => 'xxx',
            'secret_key' => 'xxx',
        ]);
    }
}
