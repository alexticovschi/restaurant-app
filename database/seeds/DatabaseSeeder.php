<?php

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
        $this->call(UsersTableSeeder::class);
        $this->call(RolesTableSeeder::class);
        $this->call(FoodCategorySeeder::class);
        $this->call(FoodItemSeeder::class);
        $this->call(MemberSeeder::class);
        $this->call(ReservationSeeder::class);
        $this->call(GeneralSettingsSeeder::class);
        $this->call(SeoSettingsSeeder::class);
        $this->call(SocialSettingsSeeder::class);
    }
}
