<?php
declare(strict_types = 1);

namespace Oft\Client\Resources;

use Oft\Client\ApiService;
use WoohooLabs\Yang\JsonApi\Schema\ResourceObject;

/**
 * Class AbstractResource
 *
 * @package Oft\Client\Resources
 */
abstract class AbstractResource
{
    const RESOURCE_URL = '';

    protected $apiService;

    /**
     * AbstractResource constructor.
     */
    public function __construct()
    {
        $this->apiService = new ApiService(static::RESOURCE_URL);
    }

    /**
     * @return \Generator | ResourceObject[]
     */
    public function getResources()
    {
        return $this->apiService->getResources();
    }

    /**
     * @param $id
     * @return \WoohooLabs\Yang\JsonApi\Schema\ResourceObject
     */
    public function getResource($id)
    {
        return $this->apiService->getResource($id);
    }

}