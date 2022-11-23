<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Models\recipe;

class RecipeTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_recipe()
    {
        $Recipe = new recipe();


        $Recipe->title = "Arroz con huevo";
        $Recipe->portions = 1;
        $Recipe->instructions = 2;
        $Recipe->save();

       
        $this->assertEquals("Arroz con huevo", $Recipe->title);

    }
}
