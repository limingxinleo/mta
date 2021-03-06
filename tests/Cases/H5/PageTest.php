<?php

declare(strict_types=1);
/**
 * This file is part of limx.
 *
 * @contact  l@hyperf.io
 */
namespace Test\Cases\H5;

use Test\Cases\AbstractTestCase;
use Xin\Mta\Factory;
use Xin\Mta\H5\Application;

/**
 * @internal
 * @coversNothing
 */
class PageTest extends AbstractTestCase
{
    public function testH5PageRealtime()
    {
        /** @var Application $app */
        $app = Factory::make('h5', $this->getConfig());

        $res = $app->page->realtime();

        $this->assertSame('mta.qq.com', $res['host']);
        $this->assertSame('/h5/api/ctr_page/list_all_page_realtime', $res['path']);
        $this->assertSame('idx=pv%2Cuv%2Cvv%2Civ&app_id=xxx&sign=570e0fd740b53fd0457dd67fe05a1f91', $res['query']);
    }
}
