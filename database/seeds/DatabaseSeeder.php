<?php

use App\Contact;
use App\Todo;
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
        factory(Todo::class, 20)->create();
        factory(Contact::class, 30)->create();
        // $this->call(UsersTableSeeder::class);
    }
}
