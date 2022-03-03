<?php
/**
 * THIS INTELLECTUAL PROPERTY IS COPYRIGHT Ⓒ 2020
 * SYSTHA TECH LLC. ALL RIGHT RESERVED
 * -----------------------------------------------------------
 * sales@systhatech.com
 * 512 903 2202
 * www.systhatech.com
 * -----------------------------------------------------------
 */
namespace Systha\systhatech\database\seeds;
use Illuminate\Database\Seeder;
class SysthatechSeeder extends Illuminate\Database\Seeder
{
	/**
	 * Seed the application's database.
	 *
	 * @return void
	 */
	public function run()
	{
		
	    $this->call(VendorTemplatesTableSeeder::class);
        $this->call(FrontendMenusTableSeeder::class);
        $this->call(VendorMenuComponentsTableSeeder::class);
        $this->call(VendorComponentPostsTableSeeder::class);
        $this->call(EcommFilesTableSeeder::class);
    }
}
