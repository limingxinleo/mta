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
        $app = Factory::make('h5', $this->getConfig());

        $res = $app->page->realtime();

        $this->assertSame('mta.qq.com', $res['host']);
        $this->assertSame('/h5/api/ctr_page/list_all_page_realtime', $res['path']);
        $this->assertSame('idx=pv%2Cuv%2Cvv%2Civ&app_id=xxx&sign=570e0fd740b53fd0457dd67fe05a1f91', $res['query']);
    }
}
