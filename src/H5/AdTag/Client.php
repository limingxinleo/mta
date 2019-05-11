<?php

declare(strict_types=1);
/**
 * This file is part of limx.
 *
 * @contact  limingxin@swoft.org
 */

namespace Xin\Mta\H5\AdTag;

use Xin\Mta\Kernel\AbstractClient;

class Client extends AbstractClient
{
    /**
     * 按天查询渠道的分析数据.
     *
     * @see https://mta.qq.com/docs/h5_api.html#%E6%B8%A0%E9%81%93%E6%95%88%E6%9E%9C%E5%88%86%E6%9E%90
     *
     * @param string $startDate 开始时间(Y-m-d)
     * @param string $endDate 结束时间(Y-m-d)
     * @param array|string $adTags
     *
     * @return array
     */
    public function query($startDate, $endDate, $adTags)
    {
        $params = [
            'start_date' => $startDate,
            'end_date' => $endDate,
            'adtags' => implode((array) $adTags, ','),
            'idx' => 'pv,uv,vv,iv',
        ];
        return $this->httpGet('ctr_adtag', $params);
    }
}
