<?php

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;

/**
 * Class DatabaseSeeder.
 */
class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $this->call(AccessTableSeeder::class);
        $this->call(HistoryTypeTableSeeder::class);
        $this->call(SettingsTableSeeder::class);
        $this->call(PagesTableSeeder::class);
        $this->call(MenuTableSeeder::class);
        $this->call(ModulesTableSeeder::class);

        $this->call(LocationsTableSeeder::class);
        $this->call(FeaturesTableSeeder::class);
        $this->call(AmenitiesTableSeeder::class);
        $this->call(RoomsTableSeeder::class);
        $this->call(FAQsTableSeeder::class);
        $this->call(ServicesTableSeeder::class);

        Model::reguard();
    }
}
