<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //this gives the admin his given role
        $role_admin = new Role();
        $role_admin->name = 'admin';
        $role_admin->description= 'An administrator user';
        $role_admin->save();

        ////this gives the doctor his given role
        $role_doctor = new Role();
        $role_doctor->name = 'doctor';
        $role_doctor->description= 'An doctor user';
        $role_doctor->save();

        //this gives the patient his given role
        $role_patient = new Role();
        $role_patient->name = 'patient';
        $role_patient->description= 'An patient user';
        $role_patient->save();

    }
}
