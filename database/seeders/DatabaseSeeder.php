<?php

namespace Database\Seeders;

use App\Models\Book;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder {
    public function run(): void
    {
        User::create(['name' => 'Admin', 'email' => 'admin@perpus.test', 'password' => 'password', 'role' => 'admin']);
        User::create(['name' => 'Lila', 'email' => 'siswa@perpus.test', 'password' => 'password', 'role' => 'siswa', 'kelas' => 'XII FE']);

        Book::create(['title' => 'Bumi', 'author' => 'tere liye','publisher' => 'gramedia', 'year' => 2005, 'stock' => 4 ]);
    }
}