<?php

namespace Oft\Tests;

use Oft\Client\Resources\AbstractResource;
use Oft\Client\Resources\Currencies;
use PHPUnit\Framework\TestCase;

/**
 * Class AbstractResourceTest
 *
 * @package Oft\Tests
 */
class AbstractResourceTest extends TestCase
{
    /**
     * @var AbstractResource
     */
    private $resource;

    public function setUp()
    {
        $this->resource = new Currencies();
    }

    /**
     * @test
     */
    public function it_should_be_constructed()
    {
        $this->assertInstanceOf(AbstractResource::class, $this->resource);
    }

    /**
     * @test
     */
    public function it_should_return_resources()
    {
        $iterator = $this->resource->getResources();
        $this->assertTrue(0 < iterator_count($iterator));
    }

    /**
     * @test
     */
    public function it_should_return_single_resource()
    {
        $resource = $this->resource->getResource('UAH');

        $this->assertEquals('UAH', $resource->attribute('code'));
    }
}
