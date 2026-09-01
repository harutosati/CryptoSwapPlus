<?php
/**
 * Tests for CryptoSwapPlus
 */

use PHPUnit\Framework\TestCase;
use Cryptoswapplus\Cryptoswapplus;

class CryptoswapplusTest extends TestCase {
    private Cryptoswapplus $instance;

    protected function setUp(): void {
        $this->instance = new Cryptoswapplus(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Cryptoswapplus::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
