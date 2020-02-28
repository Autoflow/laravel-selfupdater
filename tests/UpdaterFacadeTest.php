<?php declare(strict_types=1);

namespace Autoflow\Updater\Tests;

use Updater;

class UpdaterFacadeTest extends TestCase
{
    public function testGetFacadeAccessor()
    {
        $updater = Updater::class;

        $this->assertEquals('Updater', $updater);
    }

}
