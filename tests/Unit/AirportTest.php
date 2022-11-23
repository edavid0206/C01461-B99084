<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Models\airport;

class AirportTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_Airport()
    {
        $Airport = new airport();
        $Airport->name = "DanielOduber";
        $Airport->save();


        $this->assertEquals("DanielOduber", $Airport->name);

    }
}
