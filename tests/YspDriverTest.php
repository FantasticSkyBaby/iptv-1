<?php
declare(strict_types=1);

namespace Tests;

use Src\AbstractDriver;
use Src\Ysp\Driver\Ajh102026Driver;
use Src\Ysp\Driver\Dyanj311Driver;
use Src\Ysp\Driver\Kkfong820033Driver;
use Src\Ysp\Driver\QwerttvvDriver;
use Src\Ysp\Driver\SasonDriver;
use Src\Ysp\Driver\YuechanDriver;
use Src\Ysp\Driver\Zhxch3Driver;

class YspDriverTest extends InitTest
{
    /**
     * 测试全部驱动
     */
    public function testDrivers()
    {
        $drivers = [
            SasonDriver::class,
            YuechanDriver::class,
            QwerttvvDriver::class,
            Zhxch3Driver::class,
            Dyanj311Driver::class,
            Ajh102026Driver::class,
            Kkfong820033Driver::class
        ];
        foreach ($drivers as $driverClassName) {
            /** @var AbstractDriver $driver */
            $driver = new $driverClassName();
            $result = $driver->getM3u8Array();
            $this->assertIsArray($result);
        }
    }
}