<?php

declare(strict_types=1);

require_once 'vendor/autoload.php';

use PHPUnit\Framework\TestCase;

final class LogMeInTest extends TestCase
{
    public function testCanBeCreatedFromValidEmailAddress(): void
    {
        $this->assertInstanceOf(
            LogMeIn::class,
            LogMeIn::fromString('user@example.com')
        );
    }

    public function testCannotBeCreatedFromInvalidEmailAddress(): void
    {
        $this->expectException(InvalidArgumentException::class);

        LogMeIn::fromString('user@example');
    }

    public function testCanBeUsedAsString(): void
    {
        $this->assertEquals(
            'user@example.com',
            LogMeIn::fromString('user@example.com')
        );
    }
}