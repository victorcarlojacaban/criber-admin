<?php

use Carbon\Carbon as Carbon;
use Database\DisableForeignKeys;
use Database\TruncateTable;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FAQsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $faqs = [
            [
                'question' => 'Whats included in the room price and additional service?',
                'answer' => '<dl>
                <dt></dt>
                <dt><strong>Included</strong></dt>
                <dd>Fully Furnished Room with House Cleaning, Wifi, House Repair &amp; Maintenance, Others are subject to varies location</dd>
                <dt><strong>Excluded</strong></dt>
                <dd>Utility Such as air condition are charged based on meter, however common area utility are included.</dd>
                </dl>
                <p class="additional-text"><strong>Additional Services</strong>&nbsp;stated are based on different situation, our area manager will let you know how it works when you check in.Online Parcel Receiving When your Not home</p>',
                'status' => 1,
            ],
            [
                'question' => 'How about parking?',
                'answer' => '<p>We don&rsquo;t provide parking.Each area have different situation , it will depends on the property that we have. Some need to rent some don&rsquo;t need.</p>',
                'status' => 1,
            ],
        ];

        DB::table('faqs')->insert($faqs);
    }
}
