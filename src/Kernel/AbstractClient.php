<?php

declare(strict_types=1);
/**
 * This file is part of limx.
 *
 * @contact  limingxin@swoft.org
 */
namespace Xin\Mta\Kernel;

use GuzzleHttp\Client;

abstract class AbstractClient
{
    /**
     * @var Client
     */
    protected $client;

    /**
     * @var ServiceContainer
     */
    protected $app;

    public function __construct(ServiceContainer $app)
    {
        $this->app = $app;
        $this->client = new Client($app->config->get('http'));
    }

    /**
     * GET request.
     *
     * @return array|\EasyWeChat\Kernel\Support\Collection|object|\Psr\Http\Message\ResponseInterface|string
     */
    protected function httpGet(string $url, array $query = [])
    {
        $query['app_id'] = $this->app->config->get('app_id');
        $query['sign'] = $this->sign($query, $this->app->config->get('secret_key'));

        return $this->request($url, 'GET', ['query' => $query]);
    }

    /**
     * POST request.
     *
     * @return array|\EasyWeChat\Kernel\Support\Collection|object|\Psr\Http\Message\ResponseInterface|string
     */
    protected function httpPost(string $url, array $data = [])
    {
        return $this->request($url, 'POST', ['form_params' => $data]);
    }

    /**
     * JSON request.
     *
     * @param array|string $data
     *
     * @return array|\EasyWeChat\Kernel\Support\Collection|object|\Psr\Http\Message\ResponseInterface|string
     */
    protected function httpPostJson(string $url, array $data = [], array $query = [])
    {
        return $this->request($url, 'POST', ['query' => $query, 'json' => $data]);
    }

    /**
     * @param bool $returnRaw
     *
     * @return array
     */
    protected function request(string $url, string $method = 'GET', array $options = [])
    {
        $response = $this->client->request($method, $url, $options);

        return json_decode($response->getBody()->getContents(), true);
    }

    protected function sign(array $params, $secretKey)
    {
        ksort($params);
        foreach ($params as $key => $value) {
            $secretKey .= $key . '=' . $value;
        }
        return md5($secretKey);
    }
}
