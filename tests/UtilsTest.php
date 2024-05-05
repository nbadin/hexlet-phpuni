<?php

namespace Hexlet\Phpunit\Tests;

use PhpUnit\Framework\TestCase;
use function Hexlet\Phpunit\Utils\reverseString;

// класс UtilsTest наследуется от класса TestCase
class UtilsTest extends TestCase
{
    // метод внутри класса должен начинатся со слова test
    public function testReverse(): void
    {
        $this->assertEquals('', reverseString(''));
        $this->assertEquals('olleh', reverseString('hello'));
    }
}
