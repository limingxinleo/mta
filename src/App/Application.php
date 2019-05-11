<?php

declare(strict_types=1);
/**
 * This file is part of limx.
 *
 * @contact  limingxin@swoft.org
 */

namespace Xin\Mta\App;

use Xin\Mta\Kernel\ServiceContainer;

/**
 * @property AdTag\Client $adtag
 */
class Application extends ServiceContainer
{
    protected $defaultConfig = [
        // http://docs.guzzlephp.org/en/stable/request-options.html
        'http' => [
            'base_uri' => 'https://openapi.mta.qq.com',
        ],
    ];

    /**
     * @var array
     */
    protected $providers = [
    ];
}
