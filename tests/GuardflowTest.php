<?php
/**
 * Tests for GuardFlow
 */

use PHPUnit\Framework\TestCase;
use Guardflow\Guardflow;

class GuardflowTest extends TestCase {
    private Guardflow $instance;

    protected function setUp(): void {
        $this->instance = new Guardflow(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Guardflow::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
