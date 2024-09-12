<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = new User();
        $user->email = "enlacevisual@hotmail.com";
        $user->password = Hash::make("Password1*.");
        $user->name = "LUIS ALBERTO BERNAL B.";
        $user->type = "ADMINISTRADOR";
        $user->save();
    }
}
