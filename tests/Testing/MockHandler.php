<?php

declare(strict_types=1);
/**
 * This file is part of limx.
 *
 * @contact  limingxin@swoft.org
 */

namespace Test\Testing;

use Psr\Http\Message\RequestInterface;
use GuzzleHttp\Promise\FulfilledPromise;

class MockHandler
{
    /**
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function __invoke(RequestInterface $request, array $options)
    {
        $url = $request->getUri();
        $body = $request->getBody()->getContents();

        return new FulfilledPromise($this->getResponse([
            'host' => $url->getHost(),
            'path' => $url->getPath(),
            'query' => $url->getQuery(),
            'body' => $body,
        ]));
    }

    protected function getResponse(array $data)
    {
        return new \GuzzleHttp\Psr7\Response(
            200,
            [],
            json_encode($data, JSON_UNESCAPED_UNICODE)
        );
    }
}
