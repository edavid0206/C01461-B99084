<?php

namespace Tests\Unit;
use Tests\TestCase;
use App\Models\plane;

class PlaneTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_plane()
    {
        $Plane = new plane();


        $Plane->route = 1;
        $Plane->company_id = 1;
        $Plane->save();

       
        $this->assertEquals(1, $Plane->route);
    }
}
