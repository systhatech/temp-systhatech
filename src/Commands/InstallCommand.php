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

use Systha\Student\App\Models\Model\Menus;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Artisan;
use Symfony\Component\Console\Input\InputOption;

class InstallCommand extends Command {

    protected $name = "systhatech:install";
    protected $description = 'Install SysthaTech Main';

    protected function getOptions(){
        return [
            ['force', null, InputOption::VALUE_NONE, 'Force the operation to run when in productionn', null]
        ];
    }

    public function handle(){
        $this->handleAssets();
        $this->handleConfig();
        $this->handleSeeds();
        $this->handleViews();
        $this->info("systhatech Package Installed successfully.\t-".now());
    }

    // Handling Assets
    protected function handleAssets(){
        $path   = "assets/systhatech";
        $dec    = "Publishes Assets";
        $tag    = "systha-systhatech";
        $this->checkFile($path, $dec, $tag);
    }

    // Handling Public Assets 

    protected function handlePublic(){
        $path   = "public/systhatech";
        $dec    = "Public Assets";
        $tag    = "systha-systhatech";
        $this->checkFile($path, $dec, $tag);
    }

    // Handling  Views
    protected function handleViews(){
        $path   = "views/frontend/systhatech/";
        $dec    = "Publishes Views";
        $tag    = "systha-systhatech";
        $this->checkFile($path, $dec, $tag);
    }

    // Handing Seeds
    protected function handleSeeds(){
        $this->generateMenu();
    }

    // Handling Menus
    protected function generateMenu(){
        $exists= Menus::where('name','systhatech')->count();

        if($exists){

            if($this->confirm("Menu for foodtruck already exists, do you wish to continue?")){
                Artisan::call('db:seed', [
                    '--class' => "Systha\systhatech\database\seeds\SysthaTech MainMenuSeeder",
                ]);
                $this->makeLog('Reseeded systhatech Menus');
                $this->info("Reseeded systhatech Menus\t-".now());
            }

        }else {

            Artisan::call('db:seed', [
                '--class' => "Systha\systhatech\database\seeds\SysthaTech MainMenuSeeder",
            ]);
            $this->makeLog('Seeded systhatech Menus');
            $this->info("Seeded systhatech Menus\t-".now());

        }

    }

    // Checking Files
    protected function checkFile($path=false, $des, $tag){
        if($path){
            if(File::exists(resource_path($path))) {
                if($this->confirm($des.' already exists, do you wish to override it?')){
                    Artisan::call('vendor:publish', [
                        '--force' => true,
                        '--tag' => $tag
                    ]);
                    $this->makeLog('Republished '.$des);
                    $this->info("Republished ".$des."\t-".now());
                }
            }else {
                Artisan::call('vendor:publish', [
                    '--force' => true,
                    '--tag' => $tag
                ]);
                $this->makeLog('Published '.$des);
                $this->info("Published ".$des."\t-".now());
            }
        } else {
            Artisan::call('vendor:publish', [
                '--force' => true,
                '--tag' => $tag
            ]);
            $this->makeLog('Published '.$des);
            $this->info("Published ".$des."\t-".now());
        }
    }

    // Making Logs
    public function makeLog($title){
        $path = resource_path('assets/packages/package.log');

        if(!File::exists($path)){
            File::put($path,"## Logs from package[".now()."] ##\n");
        }
        File::put($path,File::get($path)."[".now()."]\t ".$title." from -Systha/systhatech \n");

    }
}
