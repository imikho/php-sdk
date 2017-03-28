<?php

require __DIR__ . '/vendor/autoload.php';


$banksService = new \Oft\Client\Resources\Banks();
$elements = [];

foreach ($banksService->getResources() as $item) {
    print_r($item->attributes());
};

$bank = $banksService->getResource('bnk_PQeP6WNubMpqZqGa');



/** ============================================================================== */

$countriesService = new \Oft\Client\Resources\Countries();
$elements = [];

/** @var \WoohooLabs\Yang\JsonApi\Schema\ResourceObject $item */
foreach ($countriesService->getResources() as $item) {
    $elements[] = $item->attributes();
};

print_r($elements);

$country = $countriesService->getResource('UA');

print_r($country->attributes());

/** ============================================================================== */

$currencyService = new \Oft\Client\Resources\Currencies();

$elements = [];
/** @var \WoohooLabs\Yang\JsonApi\Schema\ResourceObject $country */
foreach ($currencyService->getResources() as $country) {
    $elements[] = $country->attributes();
}


print_r($elements);

$currency = $currencyService->getResource('RUB');

print_r($currency->attributes());

/** ============================================================================== */
$service = new \Oft\Client\Resources\CurrencyIssuers();
$elements = [];
/** @var \WoohooLabs\Yang\JsonApi\Schema\ResourceObject $organization */
foreach ($service->getResources() as $issuer) {
    print_r($issuer->attributes());
}

/** ============================================================================== */

$apiService = new \Oft\Client\Resources\Organizations();

foreach ($apiService->getResources() as $organization) {
    print_r($organization->attributes());
}


/** ============================================================================== */

$paymentMethods = new \Oft\Client\Resources\PaymentMethods();

$elements = [];

foreach ($paymentMethods->getResources() as $resource){
    $elements[] = $resource->attributes();
}

print_r($elements);

$method = $paymentMethods->getResource('pm_QcW80uZ5XefiQYwp');

print_r($method->attributes());

/**
 * ================================================================================
 */

$paymentProvider = new \Oft\Client\Resources\PaymentProviders();

foreach ($paymentProvider->getResources() as $resource) {
    print_r($resource->attributes());
}

print_r($paymentProvider->getResource('psp_f9VUSVUhsl7Rm0JD')->attributes());

/** ============================================================================== */

// Basic Usage

$apiService = new \Oft\Client\ApiService(\Oft\Client\Resources\Banks::RESOURCE_URL);


$bank = $apiService->getResource('bnk_PQeP6WNubMpqZqGa');

$bankArray = $bank->toArray();


$elements = [];

$attributes = [];

foreach ($apiService->getResources() as $bank) {

    $elements[] = $bank->toArray();

    $attributes[] = $bank->attributes();

    $organizationData = $bank->relationship('organization')->toArray();
}

$organizationService = new \Oft\Client\Resources\Organizations();

$organizations = [];

$attributes = [];

foreach ($organizationService->getResources() as $organization) {

    $organizations[] = $organization->toArray();

    $attributes[] = $organization->attributes();

    $relationship = $organization->relationship('active_in_countries')->toArray();

}

$currencyService = new \Oft\Client\Resources\Currencies();

$wmz = $currencyService->getResource('WMZ');

print_r($wmz->toArray());


$apiService = new \Oft\Client\ApiService('banks');

$bank = $apiService->getResource('bnk_PQeP6WNubMpqZqGa');

$bankArray = $bank->toArray();

$bankAttr  = $bank->attributes();


$exchangers = new \Oft\Client\Resources\Exchangers();


foreach ($exchangers->getResources() as $exchanger) {

    $organizations[] = $exchanger->toArray();

    $attributes[] = $exchanger->attributes();

    print_r($exchanger->attributes());
}