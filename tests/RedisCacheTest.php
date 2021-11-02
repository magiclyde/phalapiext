<?php

use Magic\PhalApiExt\Cache\RedisCache;
use PHPUnit\Framework\TestCase;

final class RedisCacheTest extends TestCase
{
    protected $cache;

    public function setUp(): void
    {
        $this->cache = new RedisCache([
            'host' => "127.0.0.1",
            'port' => 6379,
            'pconnect' => true,
        ]);
    }

    public function testSetGet()
    {
        $this->cache->set("foo", "bar");
        $this->assertEquals("bar", $this->cache->get("foo"));
    }

    public function tearDown(): void
    {
        $this->cache = null;
    }
}
