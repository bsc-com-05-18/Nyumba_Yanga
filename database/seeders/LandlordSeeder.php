<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Landlord;

class LandlordSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $landlord = [
            'name' => 'Landlord',
            'email' => 'landlord@landlord.com',
            'password' => bcrypt('password')

        ];
        Landlord::create($landlord);
    }
}
