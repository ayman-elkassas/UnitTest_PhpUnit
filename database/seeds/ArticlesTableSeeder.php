<?php

use Illuminate\Database\Seeder;

//Additional
use Faker\Factory as Faker;
use Carbon\Carbon;
use \Illuminate\Support\Facades\DB;

class ArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $faker=Faker::create('App/Article');

        DB::table('articles')->insert(
            [
                'title'=>$faker->sentence,
                'content'=>implode($faker->paragraphs(5)),
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
        ]);
    }
}
