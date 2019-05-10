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
 * @property Page\Client $page
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
        Page\ServiceProvider::class,
    ];
}
