<?php

declare(strict_types=1);
/**
 * This file is part of limx.
 *
 * @contact  limingxin@swoft.org
 */
namespace Xin\Mta\MiniProgram;

use Xin\Mta\Kernel\AbstractClient as KernelAbstractClient;

abstract class AbstractClient extends KernelAbstractClient
{
    protected function httpGet(string $url, array $query = [])
    {
        $query['timestamp'] = time();
        return parent::httpGet($url, $query);
    }

    protected function sign(array $params, $secretKey)
    {
        ksort($params);
        foreach ($params as $key => $value) {
            $secretKey .= '&' . $key . '=' . $value;
        }
        return md5($secretKey);
    }
}
