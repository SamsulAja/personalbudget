<?php


namespace frontend\tests\Unit;

use frontend\models\Categories;
use frontend\tests\UnitTester;

class CreateTest extends \Codeception\Test\Unit
{

    protected UnitTester $tester;

    protected function _before()
    {
    }

    // tests
    public function testSomeFeature()
    {
        $categories = new Categories();
        $categories->subcategory = 'Salary2';
        $this->assertTrue($categories->validate(['name']));
    }
}
