<?php

declare(strict_types=1);
/**
 * This file is part of limx.
 *
 * @contact  limingxin@swoft.org
 */
namespace Xin\Mta\App;

use Xin\Mta\Kernel\AbstractClient as KernelAbstractClient;

abstract class AbstractClient extends KernelAbstractClient
{
    protected function httpGet(string $url, array $query = [])
    {
        $secretKey = $this->app->config->get('secret_key') . '&';

        $query['app_id'] = $this->app->config->get('app_id');
        ksort($query);
        $strs = urlencode('/' . $url) . '&';
        foreach ($query as $key => $value) {
            $strs .= urlencode($key . '=' . $value . '&');
        }

        $strs = 'GET&' . rtrim($strs, '%26');

        $query['sign'] = $this->appSign($secretKey, $strs);

        return $this->request($url, 'GET', ['query' => $query]);
    }

    protected function appSign($token, $strs)
    {
        $soucrStr = str_replace('~', '%7E', $strs);
        $sign = hash_hmac('sha1', $soucrStr, strtr($token, '-_', '+/'));
        return md5($sign);
    }
}
