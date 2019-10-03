<?php
namespace TransferWise\Test;

use Tests\TestCase;
use TransferWise\CurrencyBankInfo;

class CurrencyBankInfoTest extends TestCase {

    /** @test */
    public function it_tests_if_it_returns_a_currency_info() {
        $currency = 'INR';
        $requiredInfo = [
            "type" => "indian",
            "details" => [
                "legalType",
                "ifscCode",
                "accountNumber"
            ]
        ];

        $response = CurrencyBankInfo::get($currency);
        $this->assertEquals($requiredInfo, $response);
    }

    /** @test */
    public function it_tests_if_a_currency_is_supported() {
        $this->assertTrue(CurrencyBankInfo::isSupported('INR'));
        $this->assertFalse(CurrencyBankInfo::isSupported('SOM')); // just something fake :)
    }
}
