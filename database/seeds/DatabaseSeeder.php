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
        // scommento questa riga per inserire più seeders che verranno lanciati tutti insieme
        $this->call([
            // inserisco i seeders che voglio lanciare
            ComicsTableSeeder::class,
        ]);
    }
}
