<?php

declare(strict_types=1);
/**
 * This file is part of limx.
 *
 * @contact  limingxin@swoft.org
 */

namespace Xin\Mta;

use Illuminate\Support\Str;
use Xin\Mta\Kernel\ServiceContainer;

/**
 * @method static \Xin\Mta\H5\Application   h5(array $config)
 */
class Factory
{
    /**
     * Dynamically pass methods to the application.
     *
     * @param string $name
     * @param array $arguments
     *
     * @return mixed
     */
    public static function __callStatic($name, $arguments)
    {
        return self::make($name, ...$arguments);
    }

    /**
     * @param string $name
     * @param array $config
     *
     * @return ServiceContainer
     */
    public static function make($name, array $config)
    {
        $namespace = Str::studly($name);
        $application = "\\Xin\\Mta\\{$namespace}\\Application";

        return new $application($config);
    }
}
