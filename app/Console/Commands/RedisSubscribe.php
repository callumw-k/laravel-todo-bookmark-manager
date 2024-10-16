<?php


namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Redis;
use Log;

class RedisSubscribe extends Command
{
    protected $signature = 'redis:subscribe';

    protected $description = 'Subscribe to redis channel';

    public function handle(): void
    {


        Redis::subscribe(['update-todo-channel'], function (string $message) {
            Log::info($message);
            echo $message;
        });

    }
}
