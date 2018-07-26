<?php
declare(strict_types=1);

namespace Oft\Client;

use GuzzleHttp\Psr7\Request;
use Http\Adapter\Guzzle6\Client as GuzzleClient;
use Psr\Http\Message\RequestInterface;
use WoohooLabs\Yang\JsonApi\Client\JsonApiClient;
use WoohooLabs\Yang\JsonApi\Request\JsonApiRequestBuilder;

/**
 * Class ApiService
 *
 * @package Oft\Client
 */
class ApiService
{
    const BASE_URL = 'https://api.openfintech.io';

    /** @var string */
    private $resourceName;

    /** @var string */
    private $apiVersion;

    /** @var JsonApiRequestBuilder */
    private $requestBuilder;

    /** @var JsonApiClient */
    private $client;

    /** @var string */
    private $baseUrl = self::BASE_URL;

    /**
     * ApiService constructor.
     *
     * @param string $resourceName
     * @param string $apiVersion
     * @param array $config
     */
    public function __construct(string $resourceName, string $apiVersion = 'v1', array $config = [])
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
        $lastPage = false;
        $pageCount = 1;

        while ($lastPage === false) {

            $this->requestBuilder->setUriQueryParam('page[number]', $pageCount);
            $this->requestBuilder->setUriQueryParam('page[size]', 100);
            $this->requestBuilder->setUriQueryParam('sort', 'id');
            $request = $this->getRequest();
            $response = $this->client->sendRequest($request);
            if (!$response->isSuccessful([200])) {
                throw new \RuntimeException(sprintf('Can not get resource from URL %s', $request->getUri()));
            }

            $resources = $response->document()->primaryResources();
            $totalPage = $response->document()->meta()['pages'];

            if ($pageCount === $totalPage) {
                $lastPage = true;
            }

            foreach ($resources as $data) {
                yield $data;
            }

            $pageCount++;
        }

    }

    /**
     * @param string $id
     *
     * @return \WoohooLabs\Yang\JsonApi\Schema\ResourceObject
     */
    public function getResource(string $id)
    {
        $request = $this->requestBuilder
            ->setUri($this->getSingleResourceUri($id))
            ->fetch()
            ->getRequest();

        $response = $this->client->sendRequest($request);

        if (!$response->isSuccessful([200])) {
            throw new \RuntimeException(
                sprintf('Can not get resource from URL %s', $request->getUri()),
                $response->getStatusCode()
            );
        }

        return $response->document()->primaryResource();
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
        return sprintf('%s/%s/%s', $this->baseUrl, $this->apiVersion, $this->resourceName);
    }

    /**
     * @param string $id
     *
     * @return string
     */
    private function getSingleResourceUri(string $id)
    {
        return sprintf('%s/%s', $this->getResourceUri(), $id);
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

    /**
     * @param JsonApiClient $client
     */
    public function setClient(JsonApiClient $client)
    {
        $this->client = $client;
    }

    /**
     * @param string $baseUrl
     */
    public function setBaseUrl(string $baseUrl)
    {
        $this->baseUrl = $baseUrl;
    }

    /**
     * @return string
     */
    public function getBaseUrl(): string
    {
        return $this->baseUrl;
    }
}
