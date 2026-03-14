<?php
/**
 * Tests for MLCore
 */

use PHPUnit\Framework\TestCase;
use Mlcore\Mlcore;

class MlcoreTest extends TestCase {
    private Mlcore $instance;

    protected function setUp(): void {
        $this->instance = new Mlcore(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Mlcore::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
