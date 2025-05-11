<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::create([
            'nama' => 'Administrator',
            'email' => 'admin@gmail.com',
            'role' => '1',
            'status' => 1,
            'hp' => '0812345678901',
            'password' => bcrypt('P@55word'),
            'foto' => 'admin.jpg',
        ]);
        User::create([
            'nama' => 'Nendy Rafi Akmal M',
            'email' => 'nendyrafi@gmail.com',
            'role' => '0',
            'status' => 1,
            'hp' => '085172278849',
            'password' => bcrypt('Nendyrafi1#'),
        ]);
        User::create([
            'nama' => 'Kim Ji Won (LIZ IVE)',
            'email' => 'kimjiwon21@gmail.com',
            'role' => '0',
            'status' => 1,
            'hp' => '081234567891',
            'password' => bcrypt('Nendyrafi1#'),
        ]);
        User::create([
            'nama' => 'Michael Gorbachev',
            'email' => 'Udahmeninggal@gmail.com',
            'role' => '0',
            'status' => 1,
            'hp' => '081234567881',
            'password' => bcrypt('Nendyrafi1#'),
        ]);
    }
}
