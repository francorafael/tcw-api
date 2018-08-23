<?php

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        DB::statement("SET foreign_key_checks = 0");

        \App\User::truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        $this->call(UserTableSeeder::class);

        Model::reguard();
    }
}
