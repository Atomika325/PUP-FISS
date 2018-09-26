<?php

use Illuminate\Database\Seeder;
use App\Role;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_guest = Role::where('name', 'Guest')->first();
        $role_administrator = Role::where('name', 'Administrator')->first();
        $role_professor = Role::where('name', 'Professor')->first();

        $administrator = new User();
        $administrator->first_name = 'Alfred';
        $administrator->last_name = 'Pagalilawan';
        $administrator->email='alpags@gmail.com';
        $administrator->password = bcrypt('kazekage');
        $administrator->save();
        $administrator->roles()->attach($role_administrator);

        $professor = new User();
        $professor->first_name = 'John Dustin';
        $professor->last_name = 'Santos';
        $professor->email='dustchin@gmail.com';
        $professor->password = bcrypt('happycoding');
        $professor->save();
        $professor->roles()->attach($role_professor);
    }
}
?>
