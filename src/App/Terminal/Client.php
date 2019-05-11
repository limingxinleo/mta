<?php

declare(strict_types=1);
/**
 * This file is part of limx.
 *
 * @contact  limingxin@swoft.org
 */

namespace Xin\Mta\App\Terminal;

use Xin\Mta\Kernel\AbstractClient;

class Client extends AbstractClient
{
    /**
     * 离线数据.
     *
     * @see https://mta.qq.com/docs/open_api.html#%E7%BB%88%E7%AB%AF%E8%AE%BE%E5%A4%87%E6%95%B0%E6%8D%AE
     *
     * @param string $startDate 开始时间(Y-m-d)
     * @param string $endDate 结束时间(Y-m-d)
     * @param int $ty 1：操作系统，2：分辨率，3：网络环境，4：运营商，5：设备型号
     *
     * @return array
     */
    public function offline($startDate, $endDate, $ty)
    {
        $params = [
            'start_date' => $startDate,
            'end_date' => $endDate,
            'idx' => '10301,10302,10303',
            'ty' => $ty,
        ];
        return $this->httpGet('ctr_terminal/get_offline_data', $params);
    }
}
