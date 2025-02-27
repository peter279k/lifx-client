<?php

use PHLAK\LIFX;
use PHPUnit\Framework\TestCase;

class ClientTest extends TestCase
{
    protected $lifx;

    public function setUp()
    {
        $this->lifx = new LIFX\Client('NOT_A_REAL_APP_TOKEN');
    }

    public function test_is_instance_of_lifx_client_object()
    {
        $this->assertInstanceOf(LIFX\Client::class, $this->lifx);
    }
}
