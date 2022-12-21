<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class hello extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'execute:hello';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        echo 'Hello';

        DB::table('users')->insert(
            [
                'name' => '山田たろう',
                'email' => 'aaa3@gmail.com',
                'email_verified_at' => '2022-12-21 21:22:00',
                'password' => '123456',
                'remember_token' => 'aaaaaaa',
            ]
        );

        $list = DB::table('users')->get();
        var_export($list->all());

        return Command::SUCCESS;
    }
}
