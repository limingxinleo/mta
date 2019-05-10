<?php

declare(strict_types=1);
/**
 * This file is part of limx.
 *
 * @contact  limingxin@swoft.org
 */

namespace Xin\Mta\H5\Page;

use Xin\Mta\Kernel\AbstractClient;

class Client extends AbstractClient
{
    /**
     * 查询当天所有url的pv\uv\vv\iv数据.
     *
     * @see https://mta.qq.com/docs/h5_api.html#%E9%A1%B5%E9%9D%A2%E6%8E%92%E8%A1%8C-%E5%BD%93%E5%A4%A9%E5%AE%9E%E6%97%B6%E5%88%97%E8%A1%A8
     */
    public function realtime()
    {
        $params = [
            'idx' => 'pv,uv,vv,iv',
        ];
        return $this->httpGet('ctr_page/list_all_page_realtime', $params);
    }
}
