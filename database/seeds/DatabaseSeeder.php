<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('players')->truncate();
        $this->call(PlayerTableSeeder::class);
        DB::table('games')->truncate();
        $this->call(GameTableSeeder::class);
        DB::table('locations')->truncate();
        $this->call(LocationTableSeeder::class);
        DB::table('scores')->truncate();
        $this->call(ScoreTableSeeder::class);
        DB::table('points')->truncate();
        $this->call(PointTableSeeder::class);
        DB::table('masterkeys')->truncate();
        $this->call(MasterkeyTableSeeder::class);

    }
}
