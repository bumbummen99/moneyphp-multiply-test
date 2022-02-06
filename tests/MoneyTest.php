<?php

namespace SkyRaptor\Tests\MoneyPHPMultiplyTest;

use PHPUnit\Framework\TestCase;
use Money\Money;
use Money\Currency;

class MoneyTest extends TestCase
{
    /** @test */
    public function i_am_not_insane()
    {
        $cart = $this->getCart();

        $price = new Money(1000, new Currency('USD'));

        $this->assertEquals(new Money(210, new Currency('USD')), $price->multiply(0.21));
    }
}
