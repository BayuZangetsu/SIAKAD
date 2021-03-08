<?php

namespace Database\Seeders;

use App\Models\User;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class users extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');
        for ($i = 0; $i < 5; $i++) {
            DB::table('users')->insert([
                'name' => $faker->name(),
                'username' => $faker->firstName(),
                'address' => $faker->address,
                'birthday' => $faker->dateTimeThisCentury('now'),
                'phone' => $faker->phoneNumber,
                'email' => $faker->email,
                'role' => $faker->numberBetween(1, 3),
                'password' => bcrypt(12345678)
            ]);
        }
    }
}
