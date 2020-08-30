<?php

declare(strict_types=1);
/**
 * This file is part of limx.
 *
 * @contact  limingxin@swoft.org
 */
namespace Xin\Mta\MiniProgram\Wx;

use Xin\Mta\MiniProgram\AbstractClient;

class Client extends AbstractClient
{
    /**
     * 实时数据.
     *
     * @see https://mta.qq.com/docs/wechat_mini_program_api.html#%E5%AE%9E%E6%97%B6%E6%95%B0%E6%8D%AE-get-analyticsrealtime
     *
     * @return array
     */
    public function realtime()
    {
        return $this->httpGet('analytics/real_time');
    }

    /**
     * 历史数据.
     *
     * @see https://mta.qq.com/docs/wechat_mini_program_api.html#%E5%8E%86%E5%8F%B2%E8%B6%8B%E5%8A%BF-get-analyticshistory
     *
     * @param string $startDate 开始时间(Y-m-d)
     * @param string $endDate 结束时间(Y-m-d)
     *
     * @return array
     */
    public function history($startDate, $endDate)
    {
        $params = [
            'start_date' => $startDate,
            'end_date' => $endDate,
        ];
        return $this->httpGet('analytics/history', $params);
    }

    /**
     * 新老用户.
     *
     * @see https://mta.qq.com/docs/wechat_mini_program_api.html#%E6%96%B0%E8%80%81%E7%94%A8%E6%88%B7-get-analyticsusercompare
     *
     * @param string $startDate 开始时间(Y-m-d)
     * @param string $endDate 结束时间(Y-m-d)
     *
     * @return array
     */
    public function userCompare($startDate, $endDate)
    {
        $params = [
            'start_date' => $startDate,
            'end_date' => $endDate,
        ];
        return $this->httpGet('analytics/user_compare', $params);
    }

    /**
     * 分享分析.
     *
     * @see https://mta.qq.com/docs/wechat_mini_program_api.html#%E5%88%86%E4%BA%AB%E5%88%86%E6%9E%90-get-analyticsshare
     *
     * @param string $startDate 开始时间(Y-m-d)
     * @param string $endDate 结束时间(Y-m-d)
     *
     * @return array
     */
    public function share($startDate, $endDate)
    {
        $params = [
            'start_date' => $startDate,
            'end_date' => $endDate,
        ];
        return $this->httpGet('analytics/share', $params);
    }

    /**
     * 地域.
     *
     * @see https://mta.qq.com/docs/wechat_mini_program_api.html#%E5%9C%B0%E5%9F%9F-get-analyticsarea
     *
     * @param string $startDate 开始时间(Y-m-d)
     * @param string $endDate 结束时间(Y-m-d)
     * @param string $areaId 省ID 不填为全国
     *
     * @return array
     */
    public function area($startDate, $endDate, $areaId = null)
    {
        $params = [
            'start_date' => $startDate,
            'end_date' => $endDate,
        ];
        if (isset($areaId)) {
            $params['area_id'] = $areaId;
        }
        return $this->httpGet('analytics/area', $params);
    }

    /**
     * 终端信息.
     *
     * @see https://mta.qq.com/docs/wechat_mini_program_api.html#%E7%BB%88%E7%AB%AF%E4%BF%A1%E6%81%AF-get-analyticsterminal
     *
     * @param string $startDate 开始时间(Y-m-d)
     * @param string $endDate 结束时间(Y-m-d)
     * @param string $type wechat_version微信版本 system操作系统 resolution分辨率 language语言 platform平台
     *
     * @return array
     */
    public function terminal($startDate, $endDate, $type)
    {
        $params = [
            'start_date' => $startDate,
            'end_date' => $endDate,
            'type' => $type,
        ];
        return $this->httpGet('analytics/terminal', $params);
    }

    /**
     * 网络类型.
     *
     * @see https://mta.qq.com/docs/wechat_mini_program_api.html#%E7%BD%91%E7%BB%9C%E7%B1%BB%E5%9E%8B-get-analyticsnetwork
     *
     * @param string $startDate 开始时间(Y-m-d)
     * @param string $endDate 结束时间(Y-m-d)
     *
     * @return array
     */
    public function network($startDate, $endDate)
    {
        $params = [
            'start_date' => $startDate,
            'end_date' => $endDate,
        ];
        return $this->httpGet('analytics/network', $params);
    }

    /**
     * 自定义事件列表.
     *
     * @see https://mta.qq.com/docs/wechat_mini_program_api.html#%E8%87%AA%E5%AE%9A%E4%B9%89%E4%BA%8B%E4%BB%B6%E5%88%97%E8%A1%A8-get-analyticsevent
     *
     * @param string $startDate 开始时间(Y-m-d)
     * @param string $endDate 结束时间(Y-m-d)
     *
     * @return array
     */
    public function events($startDate, $endDate)
    {
        $params = [
            'start_date' => $startDate,
            'end_date' => $endDate,
        ];
        return $this->httpGet('analytics/event', $params);
    }

    /**
     * 自定义事件详情.
     *
     * @see https://mta.qq.com/docs/wechat_mini_program_api.html#%E8%87%AA%E5%AE%9A%E4%B9%89%E4%BA%8B%E4%BB%B6%E8%AF%A6%E6%83%85-get-analyticseventdetail
     *
     * @param string $startDate 开始时间(Y-m-d)
     * @param string $endDate 结束时间(Y-m-d)
     * @param string $eventId 事件ID
     *
     * @return array
     */
    public function event($startDate, $endDate, $eventId)
    {
        $params = [
            'start_date' => $startDate,
            'end_date' => $endDate,
            'event_id' => $eventId,
        ];
        return $this->httpGet('analytics/event_detail', $params);
    }

    /**
     * 自定义事件-漏斗模型详情.
     *
     * @see https://mta.qq.com/docs/wechat_mini_program_api.html#%E8%87%AA%E5%AE%9A%E4%B9%89%E4%BA%8B%E4%BB%B6-%E6%BC%8F%E6%96%97%E6%A8%A1%E5%9E%8B%E8%AF%A6%E6%83%85-get-analyticsfunnel
     *
     * @param string $startDate 开始时间(Y-m-d)
     * @param string $endDate 结束时间(Y-m-d)
     * @param string $funnelId 漏斗ID
     *
     * @return array
     */
    public function funnel($startDate, $endDate, $funnelId)
    {
        $params = [
            'start_date' => $startDate,
            'end_date' => $endDate,
            'funnel_id' => $funnelId,
        ];
        return $this->httpGet('analytics/funnel', $params);
    }

    /**
     * 漏斗模型配置.
     *
     * @see https://mta.qq.com/docs/wechat_mini_program_api.html#%E6%BC%8F%E6%96%97%E6%A8%A1%E5%9E%8B%E9%85%8D%E7%BD%AE-get-funnel
     *
     * @return array
     */
    public function funnelConfig()
    {
        return $this->httpGet('funnel');
    }

    /**
     * 使用时段.
     *
     * @see https://mta.qq.com/docs/wechat_mini_program_api.html#%E4%BD%BF%E7%94%A8%E6%97%B6%E6%AE%B5-get-analyticsperiod
     *
     * @param string $startDate 开始时间(Y-m-d)
     * @param string $endDate 结束时间(Y-m-d)
     *
     * @return array
     */
    public function period($startDate, $endDate)
    {
        $params = [
            'start_date' => $startDate,
            'end_date' => $endDate,
        ];
        return $this->httpGet('analytics/period', $params);
    }

    /**
     * 机型.
     *
     * @see https://mta.qq.com/docs/wechat_mini_program_api.html#%E6%9C%BA%E5%9E%8B-get-analyticsmachine
     *
     * @param string $startDate 开始时间(Y-m-d)
     * @param string $endDate 结束时间(Y-m-d)
     *
     * @return array
     */
    public function machine($startDate, $endDate)
    {
        $params = [
            'start_date' => $startDate,
            'end_date' => $endDate,
        ];
        return $this->httpGet('analytics/machine', $params);
    }
}
