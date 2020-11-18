<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Hash;
use App\Models\Role;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //this attatches the user with a given role
        $role_admin = Role::where('name','admin')->first();
        $role_doctor = Role::where('name','doctor')->first();
        $role_patient = Role::where('name','patient')->first();


        //this creates the actual admin user with an role attatched to him above
        $admin = new User();
        $admin->name = 'Dawid Karcz';
        $admin->email = 'admin@medicalcenter.ie';
        $admin->password = Hash::make('secret');
        $admin->save();
        $admin->roles()->attach($role_admin);

        //this creates the actual doctor user with an role attatched to him above
        $doctor = new User();
        $doctor->name = 'John Jones';
        $doctor->email = 'doctor@medicalcenter.ie';
        $doctor->password = Hash::make('secret');
        $doctor->save();
        $doctor->roles()->attach($role_doctor);

        //this creates the actual patient user with an role attatched to him above
        $patient = new User();
        $patient->name = 'Marry Kelly';
        $patient->email = 'patient@medicalcenter.ie';
        $patient->password = Hash::make('secret');
        $patient->save();
        $patient->roles()->attach($role_patient);
    }
}
