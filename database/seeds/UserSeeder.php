<?php

use Illuminate\Database\Seeder;
use App\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
        //
        $usuario = new User();
        $usuario->name = 'Pepito Perez';
        $usuario->email = 'betoarcaya@gmail.com';
        $usuario->password = bcrypt('123456');
        $usuario->save();
    }
}
