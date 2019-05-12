<?php

declare(strict_types=1);
/**
 * This file is part of limx.
 *
 * @contact  limingxin@swoft.org
 */

namespace Xin\Mta\App\Crash;

use Xin\Mta\App\AbstractClient;

class Client extends AbstractClient
{
    /**
     * Crash分析.
     *
     * @see https://mta.qq.com/mta/ctr_index/open_api_detail?func_id=107
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
            'idx' => '10501,10502',
        ];
        return $this->httpGet('ctr_crash_anal/get_offline_data', $params);
    }

    /**
     * Crash终端分析.
     *
     * @see https://mta.qq.com/mta/ctr_index/open_api_detail?func_id=108
     *
     * @param string $startDate 开始时间(Y-m-d)
     * @param string $endDate 结束时间(Y-m-d)
     *
     * @return array
     */
    public function envdis($startDate, $endDate)
    {
        $params = [
            'start_date' => $startDate,
            'end_date' => $endDate,
            'idx' => '10503,10504',
        ];
        return $this->httpGet('ctr_crash_anal/get_env_dis', $params);
    }
}
