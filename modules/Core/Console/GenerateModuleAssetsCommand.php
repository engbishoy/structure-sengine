<?php

namespace Modules\Core\Console;

use Illuminate\Console\Command;
use Modules\Core\Facades\FolderManager;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Input\InputArgument;

class GenerateModuleAssetsCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'sengine:publish-module {moduleName}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Publishes module assets.';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        try {
            $moduleName = ucfirst($this->argument('moduleName'));
            if(!FolderManager::moduleExists($moduleName)){
                throw new \Exception("Module doesn't exist");
            }
            FolderManager::generateModuleAssets($moduleName);
            $this->info('Module published successfully');
        } catch (\Throwable $th) {
            $this->error($th->getMessage());
        }
    }

    /**
     * Get the console command arguments.
     *
     * @return array
     */
    protected function getArguments()
    {
        return [
            ['example', InputArgument::REQUIRED, 'An example argument.'],
        ];
    }

    /**
     * Get the console command options.
     *
     * @return array
     */
    protected function getOptions()
    {
        return [
            ['example', null, InputOption::VALUE_OPTIONAL, 'An example option.', null],
        ];
    }
}
