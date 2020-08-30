<?php

declare(strict_types=1);
/**
 * This file is part of limx.
 *
 * @contact  limingxin@swoft.org
 */
namespace Test\Cases\App;

use Xin\Mta\Factory;
use Xin\Mta\App\Application;
use Test\Cases\AbstractTestCase;

/**
 * @internal
 * @coversNothing
 */
class BasicTest extends AbstractTestCase
{
    public function testAppBasicRealtime()
    {
        /** @var Application $app */
        $app = Factory::make('app', $this->getConfig());

        $res = $app->basic->realtime();

        $this->assertSame('openapi.mta.qq.com', $res['host']);
        $this->assertSame('/ctr_user_basic/get_realtime_data', $res['path']);
        $this->assertSame('app_id=xxx&idx=10101%2C10102%2C10103%2C10104%2C10105&sign=91762a3e9dd47e9fbdd07b48abb4f76f', $res['query']);
    }
}
