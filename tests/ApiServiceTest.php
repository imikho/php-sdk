<?php

namespace Oft\Tests;

use GuzzleHttp\Psr7\Request;
use Oft\Client\ApiService;
use Oft\Client\Resources\Currencies;
use PHPUnit\Framework\TestCase;
use SebastianBergmann\GlobalState\RuntimeException;
use WoohooLabs\Yang\JsonApi\Request\JsonApiRequestBuilder;

/**
 * Class ApiServiceTest
 *
 * @package Oft\Tests
 */
class ApiServiceTest extends TestCase
{
    /**
     * @var ApiService
     */
    private $apiService;

    public function setUp()
    {
        $this->apiService = new ApiService('test');
    }

    /**
     * @test
     */
    public function it_should_be_instance_of()
    {
        $this->assertInstanceOf(ApiService::class, $this->apiService);
    }

    /**
     * @test
     */
    public function it_should_return_request_with_passed_resource()
    {
        $request = $this->apiService->getRequest();

        $expectedTestUrl = ApiService::BASE_URL . '/v1/test';
        $this->assertInstanceOf(\Psr\Http\Message\RequestInterface::class, $request);
        $this->assertEquals($expectedTestUrl, $request->getUri());
    }

    /**
     * @test
     */
    public function it_should_be_initialized_with_default_request_builder()
    {
        $requestBuilder = $this->apiService->getRequestBuilder();

        $this->assertInstanceOf(\WoohooLabs\Yang\JsonApi\Request\JsonApiRequestBuilder::class, $requestBuilder);
        $this->assertEquals('http://localhost', (string)$requestBuilder->getRequest()->getUri());
        $this->assertEquals('GET', $requestBuilder->getRequest()->getMethod());
    }

    /**
     * @test
     */
    public function it_should_return_resource_iterator()
    {
        $apiService = new ApiService(Currencies::RESOURCE_URL);
        $resources = $apiService->getResources();

        $this->assertInstanceOf(\Iterator::class, $resources);
    }

    /**
     * @test
     * @expectedException \RuntimeException
     * @expectedExceptionCode  404
     */
    public function it_should_return_exception_on_invalid_single_resource()
    {
        $apiService = new ApiService(Currencies::RESOURCE_URL);
        $apiService->getResource('XYZ');
    }

    /**
     * @test
     * @expectedException RuntimeException
     */
    public function it_should_return_exception_on_invalid_resource()
    {
        iterator_to_array($this->apiService->getResources());
    }

    /**
     * @test
     */
    public function it_can_be_updated_with_own_request_builder()
    {
        $requestBuilder = new JsonApiRequestBuilder(new Request('', ''));
        $requestBuilder->setMethod('POST')->setUri('http://httpbin.org/post');

        $this->apiService->setRequestBuilder($requestBuilder);
        $setRequestBuilder = $this->apiService->getRequestBuilder();

        $this->assertInstanceOf(\WoohooLabs\Yang\JsonApi\Request\JsonApiRequestBuilder::class, $setRequestBuilder);
        $this->assertEquals('http://httpbin.org/post', (string)$requestBuilder->getRequest()->getUri());
        $this->assertEquals('POST', $requestBuilder->getRequest()->getMethod());

    }
}
