<?php

declare(strict_types=1);
/**
 * This file is part of limx.
 *
 * @contact  l@hyperf.io
 */
namespace Xin\Mta\H5\AdTag;

use Pimple\Container;
use Pimple\ServiceProviderInterface;

class ServiceProvider implements ServiceProviderInterface
{
    public function register(Container $app)
    {
        $app['adtag'] = function ($app) {
            return new Client($app);
        };
    }
}
