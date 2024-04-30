<?php

namespace Ejklock\BackendChallenge\Tests;

use Ejklock\BackendChallenge\StringHelper;
use PHPUnit\Framework\TestCase;

class StringHelperTest extends TestCase
{

    public function testBrokeTextInLines()
    {
        $text = "Eu sou uma string";
        $result = StringHelper::brokeTextInLines($text, 3);
        $this->assertIsArray($result);
        $this->assertEquals(["Eu", "sou", "uma", "string"], $result);
    }

    public function testBrokeTextInWords()
    {
        $text = "Eu sou uma string passando por ai";
        $result = StringHelper::brokeTextInWords($text);
        $this->assertIsArray($result);
        $this->assertEquals(["Eu", "sou", "uma", "string", "passando", "por", "ai"], $result);
    }
}
