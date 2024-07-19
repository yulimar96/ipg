<?php
namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call([UsersTableSeeder::class]);
        $this->call(EstadosSeeder::class);
        $this->call(MunicipioSeeder::class);
        $this->call(ParroquiaSeeder::class);
    }
}
