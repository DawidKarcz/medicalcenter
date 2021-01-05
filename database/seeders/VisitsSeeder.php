<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Visit;
use App\Models\Doctor;
use App\Models\Patient;
use App\Models\User;

class VisitsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Create 1 visit
        $visit = new Visit();
        $visit->doctor_id = 1;
        $visit->patient_id = 1;
        $visit->date = '2018/11/15';
        $visit->time = '15:28:57';
        $visit->duration = 60;
        $visit->cost = 125.00;
        $visit->save();
    }
}
