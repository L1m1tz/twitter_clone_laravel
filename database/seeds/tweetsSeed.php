<?php

use Illuminate\Database\Seeder;
use App\tweets;

class TweetsSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(tweets::class, 2)->Create()->make();
    }
}
