<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Services\SmsaeroApiV2Service;

class SmsAeroServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('smsaero', function () {
            return new SmsaeroApiV2Service('dannillav@mail.ru', 'Fh61PINt51NVk_sZOcHxSCOVj5ZOi3wf');
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        return array('smsaero');
    }
}
