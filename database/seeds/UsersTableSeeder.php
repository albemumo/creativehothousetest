<?php

use App\Coin;
use Illuminate\Database\Seeder;
use GuzzleHttp\Client;

class UsersTableSeeder extends Seeder
{

    /**
     * Run the database seeds.
     * @return void
     * @throws Exception
     */
    public function run()
    {
        $user = $this->createUser();
        $this->command->line($user);
    }

    private function createUser()
    {
        DB::transaction(function() {
            return Coin::create([
                'name' => 'Creative Hot House User',
                'email' => 'creative@hothouse.com',
                'password' => Hash::make('J8T'), // secret
                'remember_token' => str_random(10),
            ]);
        });
    }
}
