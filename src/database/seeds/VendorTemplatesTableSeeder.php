<?php

namespace Systha\systhatech\database\seeds;

use Illuminate\Database\Seeder;

class VendorTemplatesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('vendor_templates')->delete();
        
        \DB::table('vendor_templates')->insert(array (
            0 => 
            array (
                'created_at' => '2021-12-13 14:31:24',
                'deleted_at' => NULL,
                'description' => 'systhatech',
                'host' => 'localhost:8000',
                'id' => 1,
                'is_active' => 1,
                'is_deleted' => 0,
                'is_global' => 1,
                'template_location' => 'systhatech',
                'template_name' => 'systhatech',
                'updated_at' => '2021-12-23 12:29:04',
                'url' => 'localhost:8000',
                'userc_id' => NULL,
                'userd_id' => NULL,
                'useru_id' => NULL,
                'vendor_id' => 1,
            ),
        ));
        
        
    }
}