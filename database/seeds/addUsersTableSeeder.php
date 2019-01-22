<?php

use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\UserKelas;
use App\Models\User;

class addUsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        $sambung = ['Perum 1A', 'Perum 1B', 'Perum 2', 'Perum 3', 'Palem Semi'];

        for($i= 0; $i < 10; $i++ ){
            $detail = User::create([
                'name'          => $name = $faker->firstName,
                'email'         => $name.'@example.com',
                'password'      => Hash::make('123123'),
                'user_type'     => $i<3 ? 3 : 4,
                'status'        => 2,
                'sambung'       => $faker->randomElement($sambung),
            ]);

            if($i>3 and $i <8 ){
                UserKelas::create([
                    'user_id'   => $detail->id,
                    'kelas_id'  => 1,
                ]);
            }elseif($i > 7){
                UserKelas::create([
                    'user_id'   => $detail->id,
                    'kelas_id'  => 2,
                ]);
            };
            
        }

        

        $this->command->info('berhasil menambahkan 10 user random');
    }
}
