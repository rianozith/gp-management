<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\Kelas;

class kelasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        Kelas::create([
            'name'          => 'Lambatan',
            'description'   => 'kelas untuk anak smp',
            'capacity'      => 30,
        ]);

        Kelas::create([
            'name'          => 'Cepatan',
            'description'   => 'kelas untuk anak sma',
            'capacity'      => 30,
        ]);

        $this->command->info('berhasil membuat kelas cepatan & lambatan');
    }
}
