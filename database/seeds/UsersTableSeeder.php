<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // FAKER API with 100 fake users
        $faker = Faker\Factory::create();
        foreach(range(1,100) as $index){
            \App\User::create([
                'name' => $faker->name,
                'email' => $faker->email,
                'password' => bcrypt($faker->password),
            ]);
        }
    }
}
