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
        $this->command->call('passport:client', ['--password' => 'password']);
        $this->command->line('This Client credentials are needed to auth with api.');
    }
}
