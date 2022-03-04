<?php

 /**
 * THIS INTELLECTUAL PROPERTY IS COPYRIGHT Ⓒ 2020
 * SYSTHA TECH LLC. ALL RIGHT RESERVED
 * -----------------------------------------------------------
 * SALES@SYSTHATECH.COM
 * 512 903 2202
 * WWW.SYSTHATECH.COM
 * -----------------------------------------------------------
*/

namespace Systha\systhatech\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Artisan;
use Symfony\Component\Console\Input\InputOption;
use Systha\systhatech\database\seeds\VendorTemplatesTableSeeder;
use Systha\systhatech\database\seeds\FrontendMenusTableSeeder;
use Systha\systhatech\database\seeds\VendorMenuComponentsTableSeeder;
use Systha\systhatech\database\seeds\VendorComponentPostsTableSeeder;
use Systha\systhatech\database\seeds\EcommFilesTableSeeder;
use Illuminate\Filesystem\Filesystem;

class InstallCommand extends Command {

    protected $name = "systhatech:install";
    protected $description = 'Install SysthaTech Main';
	protected $files;
	protected $dir = "";

    protected function getOptions(){
        return [
            ['force', null, InputOption::VALUE_NONE, 'Force the operation to run when in productionn', null]
        ];
    }

    public function handle(Filesystem $files){
		$this->files = $files;
		$this->dir = base_path()."\\packages";
        $this->handlePublic();
        $this->handleSeeds();
        $this->info("systhatech Package Installed successfully.\t-".now());
    }

    // Handling Assets
   

    protected function handlePublic(){

		$storage_folder = $this->dir."\\storage";
		$package_folder = $this->dir."\\vendor\\systha\\systhatech";
		$this->file->copy($package_folder."\\Publishable\\systhatech", $this->dir."\\public")
		$this->file->copy($package_folder."\\Publishable\\systhatech\\storage\CMS", $this->dir."\\storage")

	  }

  

    // Handing Seeds
    protected function handleSeeds(){
       // $this->generateMenu();
	   
	    Artisan::call('db:seed', [
                '--class' => VendorTemplatesTableSeeder::class,
            ]);
			
	   Artisan::call('db:seed', [
                '--class' => FrontendMenusTableSeeder::class,
            ]);
            Artisan::call('db:seed', [
                '--class' => VendorMenuComponentsTableSeeder::class,
            ]);
            Artisan::call('db:seed', [
                '--class' => VendorComponentPostsTableSeeder::class,
            ]);
			  Artisan::call('db:seed', [
                '--class' => EcommFilesTableSeeder::class,
            ]);
			
			
            $this->info("Seeded Systha Packages\t-" . now());
    }

    
    
}
