<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Exercise;
use App\Models\Solved;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SolvedSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $rows = 100;

        for($i= 1; $i <= $rows; $i++) {

            $userId = User::where('role_id', 2)->inRandomOrder()->limit(1)->value('id');
            $exerciseId = Exercise::all()->random()->id;
        
           Solved::create([
                'user_id' => $userId,
                'exercise_id' => $exerciseId,
                'result' => rand(1,10)
            ]);
        }
    }
}
