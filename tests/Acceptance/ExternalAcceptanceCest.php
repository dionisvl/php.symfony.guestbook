<?php


namespace Tests\Acceptance;

use Tests\Support\AcceptanceTester;

class ExternalAcceptanceCest
{
    public function _before(AcceptanceTester $I)
    {
    }

    // tests
    public function tryToTest(AcceptanceTester $I)
    {
        $I->amOnPage('https://swapi.dev/api/people/3/?format=json');
        $I->see('R2-D2');
    }
}
