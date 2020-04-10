<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;

class UserModeTest extends TestCase
{
//    use DatabaseTransactions;

    /**
     * A basic unit test example.
     * @test
     * @return void
     */
    public function user_has_full_name_attribute():void
    {
        $user=\App\Article::create([
            'title'=>'aaa',
            'content'=>'aaa',
        ]);

        $this->assertEquals('aaa','aaa');
    }

    /**
     * @test
     * template to any unit test function
     */

    public function template():void{

        //logic and get output result that you are test it..
        /*
         *
         *  $output -> that test value
         */

        //and call any assertion method...
//        $this->assertEquals('expected value','$output');
    }
}
