<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\UserDetail;

class adminDetailTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        $detail = UserDetail::create([
            'user_id'       => 1,
            'first_name'    => 'riano',
            'last_name'     => 'pratama',
            'phone'         => 91939817,
            'address'       => $faker->address,
            'birth_of_date' => '1987-03-26',
            'birth_of_place'=> 'indramayu',
            'class'         => '',
            'age'           => 31,
            'father'        => 'nano',
            'mother'        => 'sugiarti',
        ]);

        $this->command->info('berhasil menambahkan detail untuk admin');

    }
}
