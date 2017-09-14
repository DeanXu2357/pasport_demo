<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithoutMiddleware;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function testDingo()
    {
        $actual = $this->get('/test');
        $expect = 200;//'Dingo Ready';
        $this->assertEquals($expect, $actual->status());
        // $this->get('/test')->assertJson(
        //     [
        //         'res' => 'API work'
        //     ]
        // );
    }
}
