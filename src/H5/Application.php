<?php

declare(strict_types=1);
/**
 * This file is part of limx.
 *
 * @contact  limingxin@swoft.org
 */

namespace Xin\Mta\H5;

use Xin\Mta\Kernel\ServiceContainer;

/**
 * @property AdTag\Client $adtag
 * @property Custom\Client $custom
 * @property Device\Client $device
 * @property Page\Client $page
 * @property Source\Client $source
 * @property Trend\Client $trend
 */
class Application extends ServiceContainer
{
    protected $defaultConfig = [
        // http://docs.guzzlephp.org/en/stable/request-options.html
        'http' => [
            'base_uri' => 'https://mta.qq.com/h5/api/',
        ],
    ];

    /**
     * @var array
     */
    protected $providers = [
        AdTag\ServiceProvider::class,
        Custom\ServiceProvider::class,
        Device\ServiceProvider::class,
        Page\ServiceProvider::class,
        Source\ServiceProvider::class,
        Trend\ServiceProvider::class,
        User\ServiceProvider::class,
    ];
}
