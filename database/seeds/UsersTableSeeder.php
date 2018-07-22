<?php

use App\Models\User;
use Illuminate\Database\Seeder;

/**
 * Class UsersTableSeeder.
 */
class UsersTableSeeder extends Seeder
{
    /**
     * @var string
     */
    private $email = 'creative@hothouse.com';
    /**
     * @var string
     */
    private $password = 'J8T';

    /**
     * Seed the User's table.
     *
     * @return void
     */
    public function run()
    {
        $this->command->line('');
        $this->command->info('####################################################');
        $this->command->info('## Running Seed 1/4 ################################');
        $this->command->info('####################################################');
        $this->command->line('');

        $this->createUser();

        $this->command->line('');
        $this->command->info('Email: '.$this->email);
        $this->command->info('Password: '.$this->password);
        $this->command->warn('Warning! These email and password are needed to access secure zone of API endpoints. Save it if you plan testing api with Postman for example.');
        $this->command->line('');
    }

    /**
     * @return $this|\Illuminate\Database\Eloquent\Model
     */
    private function createUser()
    {
        return User::create([
            'name'           => $this->email,
            'email'          => $this->email,
            'password'       => Hash::make($this->password), // secret
            'remember_token' => str_random(10),
        ]);
    }
}
