<?php

declare(strict_types=1);
/**
 * This file is part of limx.
 *
 * @contact  limingxin@swoft.org
 */

namespace Xin\Mta\App\Basic;

use Xin\Mta\Kernel\AbstractClient;

class Client extends AbstractClient
{
    /**
     * 离线数据.
     *
     * @see https://mta.qq.com/docs/open_api.html#%E5%BA%94%E7%94%A8%E5%9F%BA%E6%9C%AC%E6%8C%87%E6%A0%87
     *
     * @param string $startDate 开始时间(Y-m-d)
     * @param string $endDate 结束时间(Y-m-d)
     *
     * @return array
     */
    public function offline($startDate, $endDate)
    {
        $params = [
            'start_date' => $startDate,
            'end_date' => $endDate,
            'idx' => '10101,10102,10103,10104,10105,10106',
        ];
        return $this->httpGet('ctr_user_basic/get_offline_data', $params);
    }

    /**
     * 实时数据.
     *
     * @see https://mta.qq.com/docs/open_api.html#%E5%BA%94%E7%94%A8%E5%9F%BA%E6%9C%AC%E6%8C%87%E6%A0%87
     *
     * @param string $startDate 开始时间(Y-m-d)
     * @param string $endDate 结束时间(Y-m-d)
     *
     * @return array
     */
    public function realtime($startDate, $endDate)
    {
        $params = [
            'start_date' => $startDate,
            'end_date' => $endDate,
            'idx' => '10101,10102,10103,10104,10105,10106',
        ];
        return $this->httpGet('ctr_user_basic/get_offline_data', $params);
    }
}
