<?php

declare(strict_types=1);
/**
 * This file is part of limx.
 *
 * @contact  l@hyperf.io
 */
namespace Test\Cases;

use GuzzleHttp\HandlerStack;
use PHPUnit\Framework\TestCase;
use Test\Testing\MockHandler;

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
