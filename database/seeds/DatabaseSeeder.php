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
        $this->command->info('Hi! I gonna assist you at this travel.');

        $this->call([
            UsersTableSeeder::class,
            OAuthClientsTableSeeder::class,
            CoinsTableSeeder::class,
            CoinHistoricalsTableSeeder::class,
        ]);

        $this->command->info('Database seeders script has ben finished. Enjoy :)');
    }
}
