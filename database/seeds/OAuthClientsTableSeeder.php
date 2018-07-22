<?php

use Illuminate\Database\Seeder;

/**
 * Class OAuthClientsTableSeeder.
 */
class OAuthClientsTableSeeder extends Seeder
{
    /**
     * Seed the OAuthClient table.
     *
     * @return void
     */
    public function run()
    {
        $this->command->line('');
        $this->command->info('####################################################');
        $this->command->info('## Running Seed 2/4 ################################');
        $this->command->info('####################################################');
        $this->command->line('');

        // Command to create Password Client Authorization
        $this->command->call('passport:client', ['--password' => 'password']);

        $this->command->warn('Warning! These Client ID and Client Secret are needed to access secure zone of API endpoints. Save it if you plan testing api with Postman for example.');
        $this->command->line('');

    }
}
