<?php

namespace Himaone\PhpLogin\Config;

use PHPUnit\Framework\TestCase;

use function PHPUnit\Framework\assertNotNull;

class DatabaseTest extends TestCase
{
  public function testGetConnection()
  {
    $connection = Database::getConnection();
    self::assertNotNull($connection);
  }

  public function testGetConnectionSingleTon()
  {
    $connection1 = Database::getConnection();
    $connection2 = Database::getConnection();
    self::assertSame($connection1, $connection2);
  }
}