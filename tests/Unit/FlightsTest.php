<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Models\flight;

class FlightsTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_flights()
    {
        $Flight = new flight();


        $Flight->number_flights = 1;
        $Flight->departure_airport_id = 1;
        $Flight->arrival_airport_id = 2;
        $Flight->plane_id = 1;
        $Flight->save();

       
        $this->assertEquals(1, $Flight->number_flights);


       
        
    }
}
