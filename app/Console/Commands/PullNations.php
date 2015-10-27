<?php

namespace App\Console\Commands;

use App\Downloader;
use Illuminate\Console\Command;

class PullNations extends Command
{
    protected $signature = 'pull:nations';

    protected $description = "Pull nation data from EA's JSON and create nations";

    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        $downloader = new Downloader();

        $downloader->buildNations();

        $this->info('Nations pulled');
    }
}
