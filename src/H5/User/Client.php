<?php

declare(strict_types=1);
/**
 * This file is part of limx.
 *
 * @contact  l@hyperf.io
 */
namespace Xin\Mta\H5\User;

use Xin\Mta\Kernel\AbstractClient;

class Client extends AbstractClient
{
    /**
     * 应用在24小时内的实时访客信息.
     *
     * @see https://mta.qq.com/docs/h5_api.html#%E5%AE%9E%E6%97%B6%E8%AE%BF%E5%AE%A2
     *
     * @param int $page 每页200条记录
     *
     * @return array
     */
    public function realtime($page = 1)
    {
        $params = [
            'page' => $page,
        ];
        return $this->httpGet('ctr_user_realtime', $params);
    }

    /**
     * 按天查询当天新访客与旧访客的数量.
     *
     * @see https://mta.qq.com/docs/h5_api.html#%E6%96%B0%E8%80%81%E8%AE%BF%E5%AE%A2%E6%AF%94
     *
     * @param string $startDate 开始时间(Y-m-d)
     * @param string $endDate 结束时间(Y-m-d)
     *
     * @return array
     */
    public function compare($startDate, $endDate)
    {
        $params = [
            'start_date' => $startDate,
            'end_date' => $endDate,
        ];
        return $this->httpGet('ctr_user_compare', $params);
    }

    /**
     * 在H5统计平台查询用户画像数据，包含性别比例、年龄分布、学历分布、职业分布。接口的数据为pv量。
     *
     * @see https://mta.qq.com/docs/h5_api.html#%E7%94%A8%E6%88%B7%E7%94%BB%E5%83%8F
     *
     * @param string $startDate 开始时间(Y-m-d)
     * @param string $endDate 结束时间(Y-m-d)
     *
     * @return array
     */
    public function portrait($startDate, $endDate)
    {
        $params = [
            'start_date' => $startDate,
            'end_date' => $endDate,
            'idx' => 'sex,age,grade,profession',
        ];
        return $this->httpGet('ctr_user_portrait', $params);
    }
}
