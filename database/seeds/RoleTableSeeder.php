<?php

use Illuminate\Database\Seeder;
use App\Role;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_guest = new Role();
        $role_guest->name ='guest';
        $role_guest->description='People who do not have an account in FISS';
        $role_guest->save();

        $role_administrator = new Role();
        $role_administrator->name ='administrator';
        $role_administrator->description='The one in charge of setting schedules and handling academic workload to professors';
        $role_administrator->save();

        $role_professor = new Role();
        $role_professor->name ='professor';
        $role_professor->description='Teaches subjects to students in the university';
        $role_professor->save();
    }
}
?>