<?php

namespace RelictaFilemanager;

use Illuminate\Support\ServiceProvider;

class RelictaFilemanagerServiceProvider extends  ServiceProvider
{
    public  function boot(){
        $this->loadRoutesFrom(__DIR__.'/web.php');
        $this->loadViewsFrom(__DIR__.'/views', 'relicta-filemanager');

    }

    public function register()
    {
        // Registra otras dependencias o servicios según sea necesario
    }
}
