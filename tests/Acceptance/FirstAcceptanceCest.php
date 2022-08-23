<?php


namespace Tests\Acceptance;

use Tests\Support\AcceptanceTester;

class FirstAcceptanceCest
{
    public function _before(AcceptanceTester $I)
    {
    }

    // tests
    public function tryToTest(AcceptanceTester $I)
    {
        $I->amOnPage('/');
        $I->see('Your application is now ready and you can start working on it.');
        $I->amOnPage('/hello/den777');
        $I->see('Hello den777!');
    }
}
