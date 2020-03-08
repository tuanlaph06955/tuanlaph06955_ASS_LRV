<?php

use Illuminate\Database\Seeder;
use App\Models\Cate;

class CateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Cate::class, 10)->create();
    }
}
