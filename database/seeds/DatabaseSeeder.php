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
        $this->command->line('');
        $this->command->info('####################################################');
        $this->command->info('## Seed Start ######################################');
        $this->command->info('####################################################');
        $this->command->line('');

        $this->call([
            UsersTableSeeder::class,
            OAuthClientsTableSeeder::class,
            CoinsTableSeeder::class,
            CoinHistoricalsTableSeeder::class,
        ]);

        $this->command->line('');
        $this->command->info('####################################################');
        $this->command->info('## Database Seed Finished. Enjoy :)  ###############');
        $this->command->info('####################################################');
        $this->command->line('');
    }
}
