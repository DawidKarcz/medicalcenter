<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Hash;
use App\Models\Role;
use App\Models\User;
use App\Models\Doctor;
use App\Models\Patient;

class UserSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
      // Create 3 users
      $role_admin = Role::where('name', 'admin')->first();
      $role_doctor = Role::where('name', 'doctor')->first();
      $role_patient = Role::where('name', 'patient')->first();

      $admin = new User();
      $admin->name = 'Admin of MedicalCenter';
      $admin->email = 'admin@iadt.com';
      $admin->password = bcrypt('secret');
      $admin->save();
      $admin->roles()->attach($role_admin);

      $user_doctor = new User();
      $user_doctor->name = 'Dr.Kelly';
      $user_doctor->email = 'doctor@iadt.com';
      $user_doctor->password = bcrypt('secret');
      $user_doctor->save();
      $user_doctor->roles()->attach($role_doctor);
      $doctor = new Doctor();
      $doctor->address = '123 Henry Street';
      $doctor->phone = '0871255567';
      $doctor->started_working = '2014/07/13';
      $doctor->user_id = $user_doctor->id;
      $doctor->save();

      $user_doctor = new User();
      $user_doctor->name = 'Dr.Karczewski';
      $user_doctor->email = 'dawid@iadt.com';
      $user_doctor->password = bcrypt('secret');
      $user_doctor->save();
      $user_doctor->roles()->attach($role_doctor);
      $doctor = new Doctor();
      $doctor->address = '123 Henry Street';
      $doctor->phone = '0871288567';
      $doctor->started_working = '2020/07/21';
      $doctor->user_id = $user_doctor->id;
      $doctor->save();

      $user_doctor = new User();
      $user_doctor->name = 'Dr.Bond';
      $user_doctor->email = 'Bond@iadt.com';
      $user_doctor->password = bcrypt('secret');
      $user_doctor->save();
      $user_doctor->roles()->attach($role_doctor);
      $doctor = new Doctor();
      $doctor->address = '123 Henry Street';
      $doctor->phone = '0871266567';
      $doctor->started_working = '2019/07/13';
      $doctor->user_id = $user_doctor->id;
      $doctor->save();

      $user_patient = new User();
      $user_patient->name = 'Marry Bansom';
      $user_patient->email = 'marry@iadt.com';
      $user_patient->password = bcrypt('secret');
      $user_patient->save();
      $user_patient->roles()->attach($role_patient);
      $patient = new Patient();
      $patient->address = 'Dublin 123';
      $patient->phone = '0871234587';
      $patient->insurance = true;
      $patient->insurance_company = 'VHI';
      $patient->insurance_policy_no = 'VHI-1234567890';
      $patient->user_id = $user_patient->id;
      $patient->save();

      $user_patient = new User();
      $user_patient->name = 'John Bird';
      $user_patient->email = 'john@iadt.com';
      $user_patient->password = bcrypt('secret');
      $user_patient->save();
      $user_patient->roles()->attach($role_patient);
      $patient = new Patient();
      $patient->address = 'Galway 123';
      $patient->phone = '0874334587';
      $patient->insurance = true;
      $patient->insurance_company = 'IHV';
      $patient->insurance_policy_no = 'IHV-1234567890';
      $patient->user_id = $user_patient->id;
      $patient->save();

      $user_patient = new User();
      $user_patient->name = 'Meggan Fahy';
      $user_patient->email = 'meggan@iadt.com';
      $user_patient->password = bcrypt('secret');
      $user_patient->save();
      $user_patient->roles()->attach($role_patient);
      $patient = new Patient();
      $patient->address = 'Limerick 123';
      $patient->phone = '0871234566';
      $patient->insurance = false;
      $patient->insurance_company = '';
      $patient->insurance_policy_no = '';
      $patient->user_id = $user_patient->id;
      $patient->save();
  }
}
