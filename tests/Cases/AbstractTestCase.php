<?php

declare(strict_types=1);
/**
 * This file is part of limx.
 *
 * @contact  limingxin@swoft.org
 */
namespace Test\Cases;

use GuzzleHttp\HandlerStack;
use Test\Testing\MockHandler;
use PHPUnit\Framework\TestCase;

/**
 * Class AbstractTestCase.
 */
abstract class AbstractTestCase extends TestCase
{
    protected function getConfig()
    {
        return [
            'app_id' => 'xxx',
            'secret_key' => 'xxx',
            'http' => [
                'handler' => HandlerStack::create(new MockHandler()),
            ],
        ];
    }
}
