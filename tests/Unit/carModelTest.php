<?php

namespace Tests\Unit;

use App\Cars;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class carModelTest extends TestCase
{
    /**
     * A basic unit test that verifies the model is a type string.
     *
     * @return void
     */
    public function testCarModelString()

    {
        $car = Cars::inRandomOrder()->first();


        $this->assertIsString($car->model);

    }
}
