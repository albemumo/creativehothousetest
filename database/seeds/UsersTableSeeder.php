<?php

use App\User;
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
        $this->createUser();

        $this->command->line('This user is needed to get an authentication code.');

        $this->command->info('Email: '.$this->email);
        $this->command->info('Password: '.$this->password);
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
