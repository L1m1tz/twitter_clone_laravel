<?php

use Illuminate\Database\Seeder;
use \App\User;

class userSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(user::class, 1)->Create()->make();
    }
}
