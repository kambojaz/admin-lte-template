<?php namespace SleepingOwl\AdminLteTemplate;

use Illuminate\Support\ServiceProvider;
use SleepingOwl\Admin\FormItems\FormItem;
use SleepingOwl\AdminLteTemplate\FormItems\Code;

class AdminLteTemplateServiceProvider extends ServiceProvider
{

    public function register()
    {

        FormItem::register('code', 'SleepingOwl\AdminLteTemplate\FormItems\Code');
    }

    public function boot()
    {
        $this->loadViewsFrom(__DIR__ . '/../../views', 'admin-lte');

        $this->publishes([
            __DIR__ . '/../../../public/' => public_path('packages/sleeping-owl/admin-lte-template/'),
        ], 'assets-lte');
    }

}