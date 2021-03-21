<?php

namespace Ligorikus\CustomMailerLaravel;


class ServiceProvider extends \Illuminate\Support\ServiceProvider
{
    public function register()
    {
        $this->app->singleton(CustomMailer::class, function ($app) {
            return new CustomMailer();
        });
    }
}
