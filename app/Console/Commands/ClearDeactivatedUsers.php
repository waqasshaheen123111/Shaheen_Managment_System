<?php

namespace App\Console\Commands;

use App\Models\Teacher;
use Illuminate\Console\Command;

class ClearDeactivatedUsers extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'my-command:clear-undeactivated-users';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Clear Deactivated Users';

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
     * @return int
     */
    public function handle()
    {
        $user=Teacher::where('status','=','0')->get();
        foreach ($user as $key => $value) {
            $value->user->delete();
        }
        Teacher::where('status','=','0')->delete();
        $this->info('Clear Deactivated Users');
        
    }
}
