<?php

namespace Database\Seeders;

use App\Models\Mold;
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

        $mold1 = new Mold();
        $mold1->name = '363 Gor';
        $mold1->user_id = $user1->id;
        $mold1->shot_count = 0;
        $mold1->save();

        $mold2 = new Mold();
        $mold2->name = '362 Lower Mic';
        $mold2->user_id = $user1->id;
        $mold2->shot_count = 0;
        $mold2->save();
    }
}
