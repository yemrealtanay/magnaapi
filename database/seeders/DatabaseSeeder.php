<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $user1 = new User();
        $user1->name = 'MagnaBakim';
        $user1->email = 'bakim@magna.com.tr';
        $user1->password = bcrypt('12345678');
        $user1->save();

        $user2 = new User();
        $user2->name = 'MagnaUretim';
        $user2->email = 'uretim@magna.com.tr';
        $user2->password = bcrypt('12345678');
        $user2->save();
    }
}
