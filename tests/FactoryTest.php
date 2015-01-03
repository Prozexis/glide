<?php

namespace League\Glide;

use Mockery;

class FactoryTest extends \PHPUnit_Framework_TestCase
{
    public function testCreateServer()
    {
        $server = Factory::server([
            'source' => Mockery::mock('League\Flysystem\FilesystemInterface'),
            'cache' => Mockery::mock('League\Flysystem\FilesystemInterface'),
        ]);

        $this->assertInstanceOf('League\Glide\Server', $server);
    }
}
