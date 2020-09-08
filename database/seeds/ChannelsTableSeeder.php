<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Channel;

class ChannelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Channel::create([
            'name' => 'laravel 6.* ',
            'slug' => str::slug('laravel 6.*', '-')
        ]);
        Channel::create([
            'name' => 'Vue js  3 ',
            'slug' => str::slug('Vue js 3', '-')
        ]);
        Channel::create([
            'name' => 'Node js',
            'slug' => str::slug('Node js', '-')
        ]);
    }
}
