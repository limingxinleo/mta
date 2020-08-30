<?php

declare(strict_types=1);
/**
 * This file is part of limx.
 *
 * @contact  limingxin@swoft.org
 */
namespace Xin\Mta\App\User;

use Xin\Mta\App\AbstractClient;

class Client extends AbstractClient
{
    /**
     * 用户活跃度.
     *
     * @see https://mta.qq.com/mta/ctr_index/open_api_detail?func_id=104
     *
     * @param string $startDate 开始时间(Y-m-d)
     * @param string $endDate 结束时间(Y-m-d)
     *
     * @return array
     */
    public function active($startDate, $endDate)
    {
        $params = [
            'start_date' => $startDate,
            'end_date' => $endDate,
            'idx' => '10201,10202,10203',
        ];
        return $this->httpGet('ctr_active_anal/get_offline_data', $params);
    }

    /**
     * 用户活跃度.
     *
     * @see https://mta.qq.com/mta/ctr_index/open_api_detail?func_id=105
     *
     * @param string $startDate 开始时间(Y-m-d)
     * @param string $endDate 结束时间(Y-m-d)
     *
     * @return array
     */
    public function usage($startDate, $endDate)
    {
        $params = [
            'start_date' => $startDate,
            'end_date' => $endDate,
            'idx' => '10401,10402,10403,10404',
        ];
        return $this->httpGet('ctr_usage_anal/get_offline_data', $params);
    }

    /**
     * 使用频率分析.
     *
     * @see https://mta.qq.com/mta/ctr_index/open_api_detail?func_id=105
     *
     * @param string $startDate 开始时间(Y-m-d)
     * @param string $endDate 结束时间(Y-m-d)
     *
     * @return array
     */
    public function freq($startDate, $endDate)
    {
        $params = [
            'start_date' => $startDate,
            'end_date' => $endDate,
            'idx' => '10405,10406',
        ];
        return $this->httpGet('ctr_usage_anal/get_freq_dis', $params);
    }

    /**
     * 用户留存率.
     *
     * @see https://mta.qq.com/mta/ctr_index/open_api_detail?func_id=110
     *
     * @param string $startDate 开始时间(Y-m-d)
     * @param string $endDate 结束时间(Y-m-d)
     *
     * @return array
     */
    public function retention($startDate, $endDate)
    {
        $params = [
            'start_date' => $startDate,
            'end_date' => $endDate,
            'idx' => '11001,11002,11003,11004,11005,11006,11007,11008,11009',
        ];
        return $this->httpGet('ctr_user_retention/get_offline_data', $params);
    }
}
