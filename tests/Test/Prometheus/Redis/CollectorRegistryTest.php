<?php

namespace Test\Prometheus\Redis;

use Test\Prometheus\AbstractCollectorRegistryTest;

/**
 * @requires extension redis
 */
class CollectorRegistryTest extends AbstractCollectorRegistryTest
{
    use InitializationTrait;
}
