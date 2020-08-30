<?php

declare(strict_types=1);
/**
 * This file is part of limx.
 *
 * @contact  l@hyperf.io
 */
namespace Xin\Mta\App;

use Xin\Mta\Kernel\ServiceContainer;

/**
 * @property Basic\Client $basic
 * @property Crash\Client $crash
 * @property Terminal\Client $terminal
 * @property User\Client $user
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
        Basic\ServiceProvider::class,
        Crash\ServiceProvider::class,
        Terminal\ServiceProvider::class,
        User\ServiceProvider::class,
    ];
}
