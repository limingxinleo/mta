<?php

declare(strict_types=1);
/**
 * This file is part of limx.
 *
 * @contact  l@hyperf.io
 */
namespace Xin\Mta\H5\Custom;

use Xin\Mta\Kernel\AbstractClient;

class Client extends AbstractClient
{
    /**
     * 按天查询自定义事件的pv\uv\vv\iv.
     *
     * @see https://mta.qq.com/docs/h5_api.html#%E8%87%AA%E5%AE%9A%E4%B9%89%E4%BA%8B%E4%BB%B6
     *
     * @param string $startDate 开始时间(Y-m-d)
     * @param string $endDate 结束时间(Y-m-d)
     * @param array|string $custom 自定义事件ID
     *
     * @return array
     */
    public function query($startDate, $endDate, $custom)
    {
        $params = [
            'start_date' => $startDate,
            'end_date' => $endDate,
            'custom' => implode((array) $custom, ','),
            'idx' => 'pv,uv,vv,iv',
        ];
        return $this->httpGet('ctr_custom', $params);
    }
}
