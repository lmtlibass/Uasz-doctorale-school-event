<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::truncate();

        DB::table('role_user')->truncate();

        $admin  = User::create([
            'name' => 'M. Diop',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('password'),
            'prenom' => 'Malick',
            'nom' => 'Diop',
            'telephone' => '778888888',
            'adresse' => 'Thies',
            'profession' => 'Developpeur',
            'photo' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRyCzpuu2kYrTju8qVyDAvLqM-oihis2FTiwRzXbZR7LA&s',
        ]);
        $utilisateur = User::create([
            'name' => 'Mm Diallo',
            'email' => 'user@gmail.com',
            'password' => bcrypt('password'),
            'prenom' => 'Maimouna',
            'nom' => 'Diallo',
            'telephone' => '781458439',
            'adresse' => 'Thies',
            'profession' => 'formateur',
            'photo' => 'https://media.licdn.com/dms/image/D5603AQE0ycPnWNRO0g/profile-displayphoto-shrink_400_400/0/1673361540996?e=1691020800&v=beta&t=R_PJ-mC6Zyrw4fzrMiRcDaNuxt6rtXYM5k685IlnOpA',
        ]);
        $responsable = User::create([
            'name' => 'M. LEYE',
            'email' => 'responsable@gmail.com',
            'password' => bcrypt('password'),
            'prenom' => 'Dame',
            'nom' => 'LEYE',
            'telephone' => '776567878',
            'adresse' => 'DAKAR',
            'profession' => 'Developpeur',
            'photo' => 'https://media.licdn.com/dms/image/D4E03AQFzI_zLkxhyng/profile-displayphoto-shrink_800_800/0/1684142647623?e=1691020800&v=beta&t=rPv3WPl_5Mlv9Zwb10mVvKdJmbk9ckdSGxt32MFNiW4',
        ]);



        $adminRole          = Role::where('name', 'Admin')->first();
        $utilisateurRole    = Role::where('name', 'User')->first();
        $responsableRole    = Role::where('name', 'Responsable')->first();

        $admin->roles()->attach($adminRole);
        $utilisateur->roles()->attach($utilisateurRole);
        $responsable->roles()->attach($responsableRole);

    }
}
