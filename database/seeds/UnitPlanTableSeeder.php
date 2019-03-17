<?php

use Carbon\Carbon as Carbon;
use Database\DisableForeignKeys;
use Database\TruncateTable;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UnitPlanTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('unit_plan')->truncate();

        $unit_plan = [
            [
            	'location_id' 	   => 1,
                'payment_of_rent'  => 'According to the date of entry ',
                'security_deposit' => '1 Month Rent',
                'created_at' 	   => Carbon::now(),
                'updated_at'       => Carbon::now(),
            ],
        ];

        DB::table('unit_plan')->insert($unit_plan);
    }
}
