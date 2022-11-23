<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Models\company;

class CompanyTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_company()
    {
        $Company = new company();
        $Company->name = "Kawasaki";
        $Company->save();



        $this->assertEquals("Kawasaki", $Company->name);
    }
}
