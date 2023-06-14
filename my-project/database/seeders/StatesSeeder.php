<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
class StatesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $csvFile = database_path('seeds/states.csv');

        $file = fopen($csvFile, 'r');
      
        while (($data = fgetcsv($file)) !== false) {
            if($data[0] == "id") continue;

            DB::table('states')->insert([
                'id' => $data[0],
                'code' => $data[1],
                'name' =>$data[2],
                'created_at' =>$data[3],
                'updated_at' =>$data[4]
            ]);
        }

        fclose($file);
    }
}
