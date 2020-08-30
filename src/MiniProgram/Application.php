<?php

declare(strict_types=1);
/**
 * This file is part of limx.
 *
 * @contact  limingxin@swoft.org
 */
namespace Xin\Mta\MiniProgram;

use Xin\Mta\Kernel\ServiceContainer;

/**
 * @property Wx\Client $wx
 */
class Application extends ServiceContainer
{
    protected $defaultConfig = [
        // http://docs.guzzlephp.org/en/stable/request-options.html
        'http' => [
            'base_uri' => 'https://openapi.mta.qq.com/wx/v1/',
        ],
    ];

    /**
     * @var array
     */
    protected $providers = [
        Wx\ServiceProvider::class,
    ];
}
