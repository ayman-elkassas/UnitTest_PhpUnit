<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

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

        //success if return page contain (Laravel and Docs) in whole html page
        $response->assertSeeInOrder(['Laravel','Docs']);
    }

    public function test_about_route_return_something(){
        $response = $this->get('/about');
//        dd($response);
        //TODO:assertSee(value) compare return value with this value true
        // if contains 'About'
        $response->assertSee('About');
    }
}
