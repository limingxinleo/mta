<?php

declare(strict_types=1);
/**
 * This file is part of limx.
 *
 * @contact  l@hyperf.io
 */
namespace Xin\Mta\H5\Source;

use Xin\Mta\Kernel\AbstractClient;

class Client extends AbstractClient
{
    /**
     * 按天查询外部同站链接带来的流量情情况.
     *
     * @see https://mta.qq.com/docs/h5_api.html#%E5%A4%96%E9%83%A8%E9%93%BE%E6%8E%A5
     *
     * @param string $startDate 开始时间(Y-m-d)
     * @param string $endDate 结束时间(Y-m-d)
     * @param array|string $urls url地址
     *
     * @return array
     */
    public function query($startDate, $endDate, $urls)
    {
        $params = [
            'start_date' => $startDate,
            'end_date' => $endDate,
            'urls' => implode((array) $urls, ','),
            'idx' => 'pv,uv,vv,iv',
        ];
        return $this->httpGet('ctr_source_out', $params);
    }

    /**
     * 按天查询用户最后访问的进入次数与跳出率.
     *
     * @see https://mta.qq.com/docs/h5_api.html#%E5%85%A5%E5%8F%A3%E9%A1%B5%E9%9D%A2
     *
     * @param string $startDate 开始时间(Y-m-d)
     * @param string $endDate 结束时间(Y-m-d)
     * @param array|string $urls url地址
     *
     * @return array
     */
    public function land($startDate, $endDate, $urls)
    {
        $params = [
            'start_date' => $startDate,
            'end_date' => $endDate,
            'urls' => implode((array) $urls, ','),
            'idx' => 'pv,uv,vv,iv',
        ];
        return $this->httpGet('ctr_page_land', $params);
    }

    /**
     * 按天查询最后访问页面的离次数.
     *
     * @see https://mta.qq.com/docs/h5_api.html#%E7%A6%BB%E5%BC%80%E9%A1%B5%E9%9D%A2
     *
     * @param string $startDate 开始时间(Y-m-d)
     * @param string $endDate 结束时间(Y-m-d)
     * @param array $urls url地址
     *
     * @return array
     */
    public function leave($startDate, $endDate, $urls)
    {
        $params = [
            'start_date' => $startDate,
            'end_date' => $endDate,
            'urls' => implode((array) $urls, ','),
            'idx' => 'pv,uv,vv,iv',
        ];
        return $this->httpGet('ctr_page_exit', $params);
    }
}
