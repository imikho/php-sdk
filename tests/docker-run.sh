#!/usr/bin/env bash

docker run -it --rm \
    -v $(pwd)/:/tests -w=/tests php:${TRAVIS_PHP_VERSION} \
     vendor/bin/phpunit --configuration phpunit.xml