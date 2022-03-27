<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;

class CreateTestEnv extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'test:create-test-env';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Creates test data for testing env.';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $this->info('Seeding database with test data...');

        Artisan::call('migrate:fresh');
        Artisan::call('db:seed --class=UsersSeeder');
        Artisan::call('db:seed --class=ProductsSeeder');

        $this->info('Done!');
    }
}
