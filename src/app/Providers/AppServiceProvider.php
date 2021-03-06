<?php

namespace App\Providers;

use App\Adapter\AlaaSftpAdapter;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\ServiceProvider;
use League\Flysystem\Filesystem;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        Storage::extend('sftp', function ($app, $config) {
            return new Filesystem(new AlaaSftpAdapter($config));
        });

    }
}
