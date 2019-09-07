<?php
namespace Rehan\FormGenerator;

use Illuminate\Support\ServiceProvider;

class FormGeneratorServiceProvider extends ServiceProvider
{

    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
        $this->loadViewsFrom(__DIR__.'/resource/views', 'FormGeneratorViews');
        $this->publishes([
            __DIR__.'/config/formConfig.php' => config_path('formGeneratorConfig.php')
        ]);
    }

    public function register()
    {

    }
}
