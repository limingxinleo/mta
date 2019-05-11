<?php

declare(strict_types=1);
/**
 * This file is part of limx.
 *
 * @contact  limingxin@swoft.org
 */

namespace Xin\Mta\H5\Custom;

use Pimple\Container;
use Pimple\ServiceProviderInterface;

class ServiceProvider implements ServiceProviderInterface
{
    public function register(Container $app)
    {
        $app['custom'] = function ($app) {
            return new Client($app);
        };
    }
}
