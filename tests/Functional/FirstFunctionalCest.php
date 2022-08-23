<?php


namespace Tests\Functional;

use Tests\Support\FunctionalTester;

class FirstFunctionalCest
{
    public function _before(FunctionalTester $I)
    {
    }

    // tests
    public function tryToTest(FunctionalTester $I)
    {
        $I->amOnPage('/');
        $I->see('Your application is now ready and you can start working on it.');
        $I->amOnPage('/hello/den777');
        $I->see('Hello den777!');
    }
}
