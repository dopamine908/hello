<?php

namespace Test;

use Mobius\Hello\CoolTool;
use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;

class CoolToolTest extends TestCase
{
    public $coolTool;

    protected function setUp(): void
    {
        parent::setUp();
        $this->coolTool = new CoolTool();
    }

    #[Test]
    public function isCool_case_true(): void
    {
        $isCool = $this->coolTool->isCool('is cool');
        $this->assertTrue($isCool);
    }

    #[Test]
    public function isCool_case_false()
    {
        $isCool = $this->coolTool->isCool('is not');
        $this->assertFalse($isCool);
    }
}
