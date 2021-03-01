<?php

namespace Grada\Ean13validator\Tests;

use Grada\Ean13validator\Ean13validatorClass;
use PHPUnit\Framework\TestCase;

class Ean13ValidatorTest extends TestCase
{
    /** @test */
    public function it_can_check_invalid_length()
    {
        $vc = new Ean13validatorClass();
        $result = $vc->validate_EAN13Barcode("0123456789");
        $this->assertFalse($result);
    }

    /** @test */
    public function it_can_check_invalid_digits()
    {
        $vc = new Ean13validatorClass();
        $result = $vc->validate_EAN13Barcode("0a23456789123");
        $this->assertFalse($result);
    }

    /** @test */
    public function it_can_check_invalid_check_digit()
    {
        $vc = new Ean13validatorClass();
        $result = $vc->validate_EAN13Barcode("7790040111003");
        $this->assertFalse($result);
    }

    /** @test */
    public function it_can_check_invalid_code()
    {
        $vc = new Ean13validatorClass();
        $result = $vc->validate_EAN13Barcode("7790040111014");
        $this->assertFalse($result);
    }
        
    /** @test */
    public function it_can_check_valid()
    {
        $vc = new Ean13validatorClass();
        $result = $vc->validate_EAN13Barcode("7790040111004");
        $this->assertTrue($result);
    }
}
