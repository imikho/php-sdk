<?php
declare(strict_types = 1);

namespace Oft\Client;

use GuzzleHttp\Psr7\Request;
use Http\Adapter\Guzzle6\Client as GuzzleClient;
use Psr\Http\Message\RequestInterface;
use WoohooLabs\Yang\JsonApi\Client\JsonApiClient;
use WoohooLabs\Yang\JsonApi\Request\JsonApiRequestBuilder;

/**
 * Class ApiService
 * @package Oft\Client
 */
class ApiService
{
    const RESOURCE_URL = 'https://api.openfintech.io';

    /** @var string */
    private $resourceName;

    /** @var string */
    private $apiVersion;

    /** @var JsonApiRequestBuilder  */
    private $requestBuilder;

    /**
     * ApiService constructor.
     * @param $resourceName
     * @param string $apiVersion
     * @param array $config
     */
    public function __construct($resourceName, $apiVersion = 'v1', $config = [])
    {
        $this->requestBuilder = new JsonApiRequestBuilder(new Request('', ''));
        $this->client = new JsonApiClient(GuzzleClient::createWithConfig($config));
        $this->resourceName = $resourceName;
        $this->apiVersion = $apiVersion;
    }

    /**
     * @return \Generator|\WoohooLabs\Yang\JsonApi\Schema\ResourceObject[]
     * @throws \Exception
     */
    public function getResources()
    {
        $lastPage  = false;
        $pageCount = 1;

        while($lastPage === false) {

            $this->requestBuilder->setUriQueryParam('page[number]', $pageCount);
            $request = $this->getRequest();
            $response = $this->client->sendRequest($request);

            if (!$response->isSuccessful([200])) {
                 throw new \RuntimeException(sprintf('Can`t get resource from URL %s', $request->getUri()));
            }

            $resources = $response->document()->primaryResources();
            $totalPage = $response->document()->meta()['pages'];

            if ($pageCount === $totalPage) {
                $lastPage = true;
            }

            foreach ($resources as $data) {
                yield $data;
            }

            $pageCount ++;
        }

    }

    /**
     * @param $id
     * @return \WoohooLabs\Yang\JsonApi\Schema\ResourceObject
     */
    public function getResource($id)
    {
        $request = $this->requestBuilder
            ->setUri(sprintf('%s/%s', $this->getResourceUri(), $id))
            ->setMethod('GET')
            ->fetch()
            ->getRequest();

        return $this->client->sendRequest($request)->document()->primaryResource();
    }

    /**
     * @return RequestInterface
     */
    public function getRequest()
    {
        $request = $this->requestBuilder
            ->setUri($this->getResourceUri())
            ->setMethod('GET')
            ->fetch()
            ->getRequest();

        return $request;
    }

    /**
     * @return string
     */
    private function getResourceUri()
    {
        return sprintf('%s/%s/%s', self::RESOURCE_URL, $this->apiVersion, $this->resourceName);
    }

    /**
     * @return JsonApiRequestBuilder
     */
    public function getRequestBuilder(): JsonApiRequestBuilder
    {
        return $this->requestBuilder;
    }

    /**
     * @param JsonApiRequestBuilder $requestBuilder
     */
    public function setRequestBuilder(JsonApiRequestBuilder $requestBuilder)
    {
        $this->requestBuilder = $requestBuilder;
    }

}