# PHP SDK for Mobile Tencent Analytics (MTA)

[![Build Status](https://travis-ci.org/limingxinleo/mta.svg?branch=master)](https://travis-ci.org/limingxinleo/mta)

## 使用

```php
<?php

use Xin\Mta\Factory;
use Xin\Mta\H5\Application;
use GuzzleHttp\HandlerStack;

$config = [
    'app_id' => 'xxx',
    'secret_key' => 'xxx',
    'http' => [
        // You can replace it by your own handler. For example SwooleCoroutineHandler.
        'handler' => HandlerStack::create(null),
    ],
];

/** @var Application $app */
$app = Factory::make('h5', $this->getConfig());

$res = $app->page->realtime();

var_dump($res);

```

## 鸣谢

感谢 freyo 同学提供了 [mta-h5](https://github.com/freyo/mta-h5)，让我少写了一大片代码。