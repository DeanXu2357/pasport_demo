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

    /**
     * @test
     *
     */
    public function testDingo()
    {
        $actual = $this->get('/api');
        $expect = 200;//'Dingo Ready';
        $this->assertEquals($expect, $actual->status());
        // $this->get('/test')->assertJson(
        //     [
        //         'res' => 'API work'
        //     ]
        // );
    }

    /**
    * @test
    *
    */
    public function 測試驗證()
    {
        // $actual = $this->get('/api/auth');
        // $expect = '';
        // $this->assertEquals($expect, $actual->status());
    }
}
